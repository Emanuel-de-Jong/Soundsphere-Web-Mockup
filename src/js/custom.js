$(function () {
    $(".data-table-all").DataTable({
        scrollX: true
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
});
