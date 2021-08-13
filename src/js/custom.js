// ready(() => {
    if (document.querySelector(".data-table") != null) {
        var dtTables = [];

        function dtToggleCols(tableId) {
            let table = document.getElementById(tableId);

            var dtTable;
            dtTables.some(t => {
                if (t.table().node().id == tableId){
                    dtTable = t;
                    return true;
                }
            });

            var colIndexes = table.getAttribute("data-toggle-cols").split(" ");
            colIndexes.forEach(index => {
                let col = dtTable.column(index);
                col.visible(!col.visible());
            })
        };


        const dtDefaultOptions = {
            scrollX: true,
            dom:
                "<'row'<'col'l><'col'f>>" +
                "<'row'<'col'tr>>" +
                "<'row'<'col'i><'col'p>>",
        }


        document.querySelectorAll(".data-table-all").forEach(table => {
            dtInit(table, {
                ...dtDefaultOptions,
            });
        });

        document.querySelectorAll(".data-table-slim").forEach(table => {
            dtInit(table, {
                ...dtDefaultOptions,
                columnDefs: [
                    { orderable: false, targets: ["_all"] }
                ],
                searching: false,
                paging: false,
                info: false,
            });
        });


        function dtInit(table, options) {
            options["order"] = dtOrder(table);

            const insertTopId = table.getAttribute("data-insert-top");
            const insertBottomId = table.getAttribute("data-insert-bottom");

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

            dtTables.push(
                $(table).DataTable({
                    ...options,
                    initComplete: function(settings, json) {
                        if (insertTopId != null)
                            dtInsertSet(insertTopId, insertTopHTML);
                        
                        if (insertBottomId != null)
                            dtInsertSet(insertBottomId, insertBottomHTML);
                    }
                })
            );
        }


        function dtOrder(table) {
            let orderItems = [];
            for (let i=0; i<10; i++) {
                let col = table.getAttribute("data-c" + i);
                let dir = table.getAttribute("data-d" + i);

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
            let insert = document.getElementById(insertId);

            const insertHTML = insert.innerHTML;

            insert.parentNode.removeChild(insert);

            return insertHTML;
        }

        function dtInsertSet(insertId, insertHTML) {
            document.querySelector("." + insertId).outerHTML = insertHTML;
        }
    }



    
    if (document.querySelector("form") != null) {
        document.querySelectorAll("form").forEach(form => form.setAttribute("novalidate", true));

        querySelectorAlls(["input", "select", "textarea"]).forEach(input => {
            let invalidMessage = input.getAttribute("data-invalid");

            if (invalidMessage != null) {
                input.setCustomValidity(invalidMessage);
            } else {
                invalidMessage = "";
            }

            if (getSiblingByClass(input, "form-invalid-message") == null) {
                input.insertAdjacentHTML("afterend", "<div class=\"form-invalid-message\">" + invalidMessage + "</div>");
            }
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "input", (e) => {
            validateInput(e.target);
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "invalid", (e) => {
            showInvalidMessage(e.target);
        });


        addEventListeners(querySelectorAlls(["input", "select", "textarea"]), "change", (e) => {
            let input = e.target;

            if (input.validity.customError) {
                input.setCustomValidity("");
                hideInvalidMessage(input);
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
            if (input.validity.valid) {
                hideInvalidMessage(input);
            } else {
                showInvalidMessage(input);
            }
        }

        
        function showInvalidMessage(input) {
            input.classList.add("form-invalid");

            let messageDiv = getSiblingByClass(input, "form-invalid-message");
            messageDiv.innerHTML = input.validationMessage;
        }

        function hideInvalidMessage(input) {
            input.classList.remove("form-invalid");

            let messageDiv = getSiblingByClass(input, "form-invalid-message");
            messageDiv.innerHTML = "";
        }
    }
    



    if (document.querySelector("input[type=file]") != null) {
        addEventListeners(document.querySelectorAll("input[type=file]"), "dragenter", (e) => {
            let input = e.target;

            input.classList.add("input-file-dragenter");
        });

        addEventsListeners(document.querySelectorAll("input[type=file]"), ["dragleave", "drop"], (e) => {
            let input = e.target;

            input.classList.remove("input-file-dragenter");
            input.focus();
        });

        const acceptedExtensions = ["png", "jpg", "jpeg"];
        addEventListeners(document.querySelectorAll("input.input-image"), "change", (e) => {
            let input = e.target;

            const filepath = input.value;
            if (acceptedExtensions.indexOf(filepath.split(".").pop().toLowerCase()) == -1)
            {
                e.preventDefault();
                input.value = "";
            }
        });
    }
        


    
    if (document.getElementById("player-edit") != null) {
        document.getElementById("username-color-l").addEventListener("change", showPlayerName);
        document.getElementById("username-color-r").addEventListener("change", showPlayerName);
        document.getElementById("username").addEventListener("change", showPlayerName);

        function showPlayerName() {
            const colorL = document.getElementById("username-color-l").value;
            const colorR = document.getElementById("username-color-r").value;
            const name = document.getElementById("username").value;

            let preview = document.getElementById("username-preview");
            preview.innerHTML = name;
            preview.style.background = "linear-gradient(45deg, " + colorL + ", " + colorR + ")";
            preview.style.webkitBackgroundClip = "text";
        }
    }
// });
