<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Soundsphere is a rhythm game that aims for high customization. On this offical site, players can compare scores, join communities and much more!">

    <script src="https://kit.fontawesome.com/dbaf22a3a8.js?v=1.0"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="stylesheet" href="css/responsive.css?v=1.0">

    <title>soundsphere</title>
</head>

<body class="d-flex flex-column">
    <?php require('components/navbar.php'); ?>

    <?php
        $page;
        if (isset($_GET["a"])) {
            $page = str_replace("_", "/", $_GET["a"]);
        } else {
            $page = "home";
        }

        $filePath = 'pages/' . $page . '.php';
        if (file_exists($filePath)){
            require($filePath);
        } else {
            require('pages/errors/404.php');
        }
    ?>

    <?php require('components/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/helper.js?v=1.0"></script>
    <script src="js/custom.js?v=1.0"></script>
</body>
</html>