$(function () {
    var dtDefaultOptions = {
        scrollX: true,
    }

    function initDataTable(table, options) {
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

        options["order"] = orderItems;

        table.DataTable(options);
    }

    $(".data-table-all").each(function() {
        initDataTable($(this), {
            ...dtDefaultOptions,
        })
    });

    $(".data-table-slim").each(function() {
        initDataTable($(this), {
            ...dtDefaultOptions,
            aoColumnDefs: [
                { bSortable: false, aTargets: ["_all"] }
            ],
            searching: false,
            paging: false,
            info: false,
        })
    });
    



    $(".form-settings input[type=file]").on("dragenter", function() {
        var input = $(this);
        input.addClass("input-file-dragenter");
    });

    $(".form-settings input[type=file]").on("dragleave drop", function() {
        var input = $(this);
        input.removeClass("input-file-dragenter");
        input.focus();
    });

    var acceptedExtensions = ['png', 'jpg', 'jpeg'];
    $("input.input-image").on("change", function (e) {
        var input = $(this);
        var filepath = input.val();
        if ($.inArray(filepath.split('.').pop().toLowerCase(), acceptedExtensions) == -1)
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
