$(function() {
    $("form").on("submit", function(event) {
        let form = this;
        let jForm = $(this);

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            jForm.addClass("was-validated");
        }
    })

    $("input").each(function() {
        let jInput = $(this);

        let message = jInput.attr("data-invalid");
        if (message == null) {
            return;
        }
    });
});