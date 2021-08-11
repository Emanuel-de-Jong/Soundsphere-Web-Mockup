$(function() {
    $("form").each(function() {
        let form = $(this);
    });

    $("form").on("submit", function(event) {
        let formElem = this;
        let form = $(this);


        let input = document.getElementById("community-name")
        console.log(input.validity);

        if (!formElem.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            form.addClass("was-validated");
        }
    })
});