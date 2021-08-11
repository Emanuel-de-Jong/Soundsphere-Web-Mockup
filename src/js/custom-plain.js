ready(() => {
    if (document.querySelector(".data-table") != null) {
        const dtDefaultOptions = {
            scrollX: true,
            dom:
                "<'row'<'col'l><'col'f>>" +
                "<'row'<'col'tr>>" +
                "<'row'<'col'i><'col'p>>",
        }


        document.querySelectorAll(".data-table-all").forEach(table => {
            dtInit($(table), {
                ...dtDefaultOptions,
            });
        });

        document.querySelectorAll(".data-table-slim").forEach(table => {
            dtInit($(table), {
                ...dtDefaultOptions,
                columnDefs: [
                    { orderable: false, targets: ["_all"] }
                ],
                searching: false,
                paging: false,
                info: false,
            });
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
    }



    
    if (document.querySelector("form") != null) {
        document.querySelectorAll("form").forEach(form => { $(form).attr("novalidate", true); });

        querySelectorAlls(["input", "select", "textarea"]).forEach(input => {
            let jInput = $(input);
            
            let invalidMessage = jInput.attr("data-invalid");

            if (invalidMessage != null) {
                input.setCustomValidity(invalidMessage);
            } else {
                invalidMessage = "";
            }

            if (jInput.siblings(".form-invalid-message")[0] == null) {
                jInput.after("<div class=\"form-invalid-message\">" + invalidMessage + "</div>");
            }
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "input", (e) => {
            validateInput(e.target);
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "invalid", (e) => {
            showInvalidMessage($(e.target));
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "change", (e) => {
            let input = e.target;
            let jInput = $(input);

            if (input.validity.customError) {
                input.setCustomValidity("");
                hideInvalidMessage(jInput);
            }
        });

        addEventListeners(document.querySelectorAll("form"), "submit", (e) => {
            let form = e.target;

            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
        });


        function validateInput(input) {
            let jInput = $(input);
            
            if (input.validity.valid) {
                hideInvalidMessage(jInput);
            } else {
                showInvalidMessage(jInput);
            }
        }

        
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
    }
    



    if (document.querySelector("input[type=file]") != null) {
        addEventListeners(document.querySelectorAll("input[type=file]"), "dragenter", (e) => {
            let jInput = $(e.target);
            jInput.addClass("input-file-dragenter");
        });

        addEventsListeners(document.querySelectorAll("input[type=file]"), ["dragleave", "drop"], (e) => {
            let jInput = $(e.target);
            jInput.removeClass("input-file-dragenter");
            jInput.focus();
        });

        const acceptedExtensions = ["png", "jpg", "jpeg"];
        addEventListeners(document.querySelectorAll("input.input-image"), "change", (e) => {
            let jInput = $(e.target);
            const filepath = jInput.val();
            if ($.inArray(filepath.split(".").pop().toLowerCase(), acceptedExtensions) == -1)
            {
                e.preventDefault();
                $(this).val("");
            }
        });
    }
        


    
    if (document.getElementById("player-edit") != null) {
        document.getElementById("username-color-l").addEventListener("change", showPlayerName);
        document.getElementById("username-color-r").addEventListener("change", showPlayerName);
        document.getElementById("username").addEventListener("change", showPlayerName);

        function showPlayerName() {
            const colorL = $("#player-edit #username-color-l").val();
            const colorR = $("#player-edit #username-color-r").val();
            const name = $("#player-edit #username").val();

            let preview = document.getElementById("username-preview");
            preview.innerHTML = name;
            preview.style.background = "linear-gradient(45deg, " + colorL + ", " + colorR + ")";
            preview.style.webkitBackgroundClip = "text";
        }
    }
});
