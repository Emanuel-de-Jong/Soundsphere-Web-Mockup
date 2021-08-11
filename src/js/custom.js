$(function() {
    const dtDefaultOptions = {
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

        const insertTopId = table.attr("data-insert-top");
        const insertBottomId = table.attr("data-insert-bottom");

        let insertTopHTML;
        let domTop = "<'row'<'col'l><'col'f>>";
        if (insertTopId != null) {
            insertTopHTML = dtInsertGet(insertTopId);
            domTop = "<'row'<'col'l><'" + insertTopId + "'><'col'f>>";
        }

        let insertBottomHTML;
        let domBottom = "<'row'<'col'i><'col'p>>";
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
        let orderItems = [];
        for (let i=0; i<10; i++) {
            let col = table.attr("data-c" + i);
            let dir = table.attr("data-d" + i);

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
        let insert = $("#" + insertId);
        const insertHTML = insert.html();

        insert.remove();

        return insertHTML;
    }

    function dtInsertSet(insertId, insertHTML) {
        $("div." + insertId).replaceWith(insertHTML);
    }
    



    $(".form-settings input[type=file]").on("dragenter", function() {
        let input = $(this);
        input.addClass("input-file-dragenter");
    });

    $(".form-settings input[type=file]").on("dragleave drop", function() {
        let input = $(this);
        input.removeClass("input-file-dragenter");
        input.focus();
    });

    const acceptedExtensions = ["png", "jpg", "jpeg"];
    $("input.input-image").on("change", function(event) {
        let input = $(this);
        const filepath = input.val();
        if ($.inArray(filepath.split(".").pop().toLowerCase(), acceptedExtensions) == -1)
        {
            event.preventDefault();
            $(this).val("");
        }
    });
    


    
    $("#player-edit #username-color-l").on("change", showPlayerName);
    $("#player-edit #username-color-r").on("change", showPlayerName);
    $("#player-edit #username").on("change", showPlayerName);

    function showPlayerName() {
        const colorL = $("#player-edit #username-color-l").val();
        const colorR = $("#player-edit #username-color-r").val();
        const name = $("#player-edit #username").val();

        let preview = $("#player-edit #username-preview");
        preview.html(name);
        preview.css({
            "background": "linear-gradient(45deg, "+colorL+", "+colorR+")",
            "-webkit-background-clip": "text"
        });
    }
});
