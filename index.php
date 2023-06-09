<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Facturas</title>
    <link rel="stylesheet" href="./assets/css/styles.css? <?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/mermaid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Raleway:ital,wght@0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php

    if (!isset($_GET['view']) || $_GET['view'] == "") {
        $_GET['view'] = "login";
    };

    if (is_file("./views/" . $_GET['view'] . ".php") && $_GET['view'] != 404 && $_GET['view'] != 'login' && $_GET['view'] != 'logout') {

        require_once "./functions/session.php";

        include "./layouts/layout.php";

        echo '  
        <div class="app">  
        <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
        ';

        include "./views/" . $_GET['view'] . ".php";

        echo '</div> </div> </div> </div>';

    } else if ($_GET['view'] === 'login') {
        include "./views/login.php";
    } else if ($_GET['view'] === 'logout') {
        include "./views/logout.php";
    } else {
        include "./views/404.php";
    }

    ?>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/gridjs.umd.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>