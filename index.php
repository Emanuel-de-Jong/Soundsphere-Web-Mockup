<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.82.0" />

    <title>soundsphere</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/sticky-footer.css" />
</head>

<body>
    <?php require('components/navbar.php'); ?>

    <?php
    $page;
    if (isset($_GET["a"])) {
        $page = $_GET["a"];
    } else {
        $page = "home";
    }

    require('pages/' . $page . '.php');
    ?>

    <?php require('components/footer.php'); ?>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>