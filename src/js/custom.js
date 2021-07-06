$(function () {
    $(".data-table-all").DataTable({
        scrollX: true
    });

    $(".data-table-communities").DataTable({
        scrollX: true,
        order: [[ 2, "desc" ]]
    });
});
