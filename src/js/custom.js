// ready(() => {
    if (document.querySelector(".data-table") != null) {
        var dtTables = {};


        function dtToggleCols(tableId) {
            let table = document.getElementById(tableId);
            let dtTable = dtTables[tableId];

            let colIndexes = table.getAttribute("data-toggle-cols").split(" ").map(Number);
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
            let toggleOption = dtGetToggleOption(table);
            if (toggleOption != null) {
                if (options.hasOwnProperty("columnDefs")) {
                    options["columnDefs"].push(toggleOption);
                } else {
                    options["columnDefs"] = [toggleOption];
                }
            }

            options["order"] = dtGetOrder(table);

            const insertTopId = table.getAttribute("data-insert-top");
            const insertBottomId = table.getAttribute("data-insert-bottom");

            let insertTopHTML;
            let domTop = "<'row'<'col'l><'col'f>>";
            if (insertTopId != null) {
                insertTopHTML = dtGetInsert(insertTopId);
                domTop = "<'row'<'col'l><'" + insertTopId + "'><'col'f>>";
            }

            let insertBottomHTML;
            let domBottom = "<'row'<'col'i><'col'p>>";
            if (insertBottomId != null) {
                insertBottomHTML = dtGetInsert(insertBottomId);
                domBottom = "<'row'<'col'i><'" + insertBottomId + "'><'col'p>>";
            }

            if (insertTopId != null || insertBottomId != null) {
                options["dom"] = 
                    domTop +
                    "<'row'<'col'tr>>" +
                    domBottom;
            }

            let dtTable = $(table).DataTable({
                ...options,
                initComplete: function(settings, json) {
                    if (insertTopId != null)
                        dtSetInsert(insertTopId, insertTopHTML);
                    
                    if (insertBottomId != null)
                        dtSetInsert(insertBottomId, insertBottomHTML);
                }
            })

            dtTables[dtTable.table().node().id] = dtTable;
        }


        function dtGetToggleOption(table) {
            let toggleCols = table.getAttribute("data-toggle-cols");

            if (toggleCols != null){
                let colIndexes = toggleCols.split(" ").map(Number);
            
                return {
                    targets: colIndexes,
                    visible: false
                }
            }
        }


        function dtGetOrder(table) {
            let orderItems = [];

            let orders = table.getAttribute("data-orders");
            if (orders != null) {
                orders.split(" ").forEach(order => {
                    let col = parseInt(order.slice(0, -1));
                    let dir = order.slice(-1) == "a" ? "asc" : "desc";
                    orderItems.push([col, dir]);
                });
            } else {
                orderItems[0] = [0, "asc"];
            }
            
            return orderItems;
        }


        function dtGetInsert(insertId) {
            let insert = document.getElementById(insertId);

            const insertHTML = insert.innerHTML;

            insert.parentNode.removeChild(insert);

            return insertHTML;
        }

        function dtSetInsert(insertId, insertHTML) {
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
