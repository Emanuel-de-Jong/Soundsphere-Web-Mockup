$(function () {
    $(".data-table-all").DataTable({
        scrollX: true
    });

    $(".data-table-communities").DataTable({
        scrollX: true,
        order: [[ 2, "desc" ]]
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

    $("input.input-image").on("drop", function () {
        var input = $(this);
        var filename = input.val();
    
        var acceptedExtensions = ['png', 'jpg', 'jpeg'];
        if ($.inArray(filename.split('.').pop().toLowerCase(), acceptedExtensions) == -1)
        {
            console.log("wrong");
            $(this).val("");
            console.log("val: " + $(this).val());
        } else {
            console.log("right");
        }
    });

    $("input.input-image").hover(function () {
        console.log("val: " + $(this).val() + "\ntype: " + typeof $(this).val());
    });
});
