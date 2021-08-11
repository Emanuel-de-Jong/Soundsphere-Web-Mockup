$(function() {
    var dtDefaultOptions = {
        scrollX: true,
        dom:
            "<'row'<'col'l><'col'f>>" +
            "<'row'<'col'tr>>" +
            "<'row'<'col'i><'col'p>>",
    }


    $(".data-table-all").each(function() {
        dtInit($(this), {
            ...dtDefaultOptions,
        })
    });

    $(".data-table-slim").each(function() {
        dtInit($(this), {
            ...dtDefaultOptions,
            columnDefs: [
                { orderable: false, targets: ["_all"] }
            ],
            searching: false,
            paging: false,
            info: false,
        })
    });


    function dtInit(table, options) {
        options["order"] = dtOrder(table);

        var insertTopId = table.attr("data-insert-top");
        var insertBottomId = table.attr("data-insert-bottom");

        var insertTopHTML;
        var domTop = "<'row'<'col'l><'col'f>>";
        if (insertTopId != null) {
            insertTopHTML = dtInsertGet(insertTopId);
            domTop = "<'row'<'col'l><'" + insertTopId + "'><'col'f>>";
        }

        var insertBottomHTML;
        var domBottom = "<'row'<'col'i><'col'p>>";
        if (insertBottomId != null) {
            insertBottomHTML = dtInsertGet(insertBottomId);
            domBottom = "<'row'<'col'i><'" + insertBottomId + "'><'col'p>>";
        }

        if (insertTopId != null || insertBottomId != null) {
            options["dom"] = 
                domTop +
                "<'row'<'col'tr>>" +
                domBottom;
        }

        table.DataTable({
            ...options,
            initComplete: function(settings, json) {
                if (insertTopId != null)
                    dtInsertSet(insertTopId, insertTopHTML);
                
                if (insertBottomId != null)
                    dtInsertSet(insertBottomId, insertBottomHTML);
            }
        });
    }


    function dtOrder(table) {
        var orderItems = [];
        for (var i=0; i<10; i++) {
            var col = table.attr("data-c" + i);
            var dir = table.attr("data-d" + i);

            if (col == null)
                break;
            
            if (dir == null)
                dir = "asc";

            orderItems[i] = [parseInt(col), dir];
        }
        
        if (orderItems.length == 0)
            orderItems[0] = [0, "asc"];
        
        return orderItems;
    }


    function dtInsertGet(insertId) {
        var insert = $("#" + insertId);
        var insertHTML = insert.html();

        insert.remove();

        return insertHTML;
    }

    function dtInsertSet(insertId, insertHTML) {
        $("div." + insertId).replaceWith(insertHTML);
    }
    



    $(".form-settings input[type=file]").on("dragenter", function() {
        var input = $(this);
        input.addClass("input-file-dragenter");
    });

    $(".form-settings input[type=file]").on("dragleave drop", function() {
        var input = $(this);
        input.removeClass("input-file-dragenter");
        input.focus();
    });

    var acceptedExtensions = ["png", "jpg", "jpeg"];
    $("input.input-image").on("change", function (e) {
        var input = $(this);
        var filepath = input.val();
        if ($.inArray(filepath.split(".").pop().toLowerCase(), acceptedExtensions) == -1)
        {
            e.preventDefault();
            $(this).val("");
        }
    });
    


    
    $("#player-edit #username-color-l").on("change", showPlayerName);
    $("#player-edit #username-color-r").on("change", showPlayerName);
    $("#player-edit #username").on("change", showPlayerName);

    function showPlayerName() {
        var colorL = $("#player-edit #username-color-l").val();
        var colorR = $("#player-edit #username-color-r").val();
        var name = $("#player-edit #username").val();

        var preview = $("#player-edit #username-preview");
        preview.html(name);
        preview.css({
            "background": "linear-gradient(45deg, "+colorL+", "+colorR+")",
            "-webkit-background-clip": "text"
        });
    }
});
