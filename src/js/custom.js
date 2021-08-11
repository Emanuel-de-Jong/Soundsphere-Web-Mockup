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


    function dtInit(jTable, options) {
        options["order"] = dtOrder(jTable);

        const insertTopId = jTable.attr("data-insert-top");
        const insertBottomId = jTable.attr("data-insert-bottom");

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

        jTable.DataTable({
            ...options,
            initComplete: function(settings, json) {
                if (insertTopId != null)
                    dtInsertSet(insertTopId, insertTopHTML);
                
                if (insertBottomId != null)
                    dtInsertSet(insertBottomId, insertBottomHTML);
            }
        });
    }


    function dtOrder(jTable) {
        let orderItems = [];
        for (let i=0; i<10; i++) {
            let col = jTable.attr("data-c" + i);
            let dir = jTable.attr("data-d" + i);

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
        let jInsert = $("#" + insertId);
        const insertHTML = jInsert.html();

        jInsert.remove();

        return insertHTML;
    }

    function dtInsertSet(insertId, insertHTML) {
        $("div." + insertId).replaceWith(insertHTML);
    }




    $("form").each(function() { $(this).attr("novalidate", true); });

    $("input, select, textarea").each(function() {
        let input = this;
        let jInput = $(this);
        
        let invalidMessage = jInput.attr("data-invalid");

        if (invalidMessage != null) {
            input.setCustomValidity(invalidMessage);
        } else {
            invalidMessage = "";
        }

        jInput.after("<div class=\"form-invalid-message\">" + invalidMessage + "</div>");
    });


    function showInvalidMessage(jInput) {
        jInput.addClass("form-invalid");

        let jMessageDiv = jInput.siblings(".form-invalid-message");
        jMessageDiv.html(jInput.get(0).validationMessage);
    }

    function hideInvalidMessage(jInput) {
        jInput.removeClass("form-invalid");

        let jMessageDiv = jInput.siblings(".form-invalid-message");
        jMessageDiv.html("");
    }


    $("input, select, textarea").on("input", function() {
        let input = this;
        let jInput = $(this);
        
        if (input.validity.valid) {
            hideInvalidMessage(jInput);
        } else {
            showInvalidMessage(jInput);
        }
    })


    $("input, select, textarea").on("change", function() {
        let input = this;
        let jInput = $(this);

        if (input.validity.customError) {
            input.setCustomValidity("");
            hideInvalidMessage(jInput);
        }
    })

    $("form").on("submit", function(event) {
        let form = this;

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
    })
    



    $(".form-settings input[type=file]").on("dragenter", function() {
        let jInput = $(this);
        jInput.addClass("input-file-dragenter");
    });

    $(".form-settings input[type=file]").on("dragleave drop", function() {
        let jInput = $(this);
        jInput.removeClass("input-file-dragenter");
        jInput.focus();
    });

    const acceptedExtensions = ["png", "jpg", "jpeg"];
    $("input.input-image").on("change", function(event) {
        let jInput = $(this);
        const filepath = jInput.val();
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

        let jPreview = $("#player-edit #username-preview");
        jPreview.html(name);
        jPreview.css({
            "background": "linear-gradient(45deg, " + colorL + ", " + colorR + ")",
            "-webkit-background-clip": "text"
        });
    }
});
