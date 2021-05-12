$(function () {
    $(".data-table-all").DataTable({
        ordering: true,
        info: true,
    });

    $(".data-table-none").DataTable({
        ordering: false,
        info: false,
    });

    $(".data-table-order").DataTable({
        ordering: false,
        info: true,
    });
});
