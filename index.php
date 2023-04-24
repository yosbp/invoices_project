<?php
session_name("RE");
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Facturas</title>
    <link rel="stylesheet" href="./assets/styles/styles.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/styles/mermaid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Raleway:ital,wght@0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php

    if (!isset($_GET['view']) || $_GET['view'] == "") {
        $_GET['view'] = "login";
    };

    if (is_file("./views/" . $_GET['view'] . ".php") && $_GET['view'] != 404) {
        include "./views/" . $_GET['view'] . ".php";
    } else {
        include "./views/404.php";
    }

    ?>

    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/gridjs.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>