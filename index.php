<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/sticky-footer.css">

    <title>soundsphere</title>
</head>

<body>
    <?php require('components/navbar.php'); ?>

    <main role="main">
        <div class="container">
            <?php
                $page;
                if (isset($_GET["a"])) {
                    $page = $_GET["a"];
                } else {
                    $page = "home";
                }

                require('pages/' . $page . '.php'); 
            ?>
        </div>
    </main>

    <?php require('components/footer.php'); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>