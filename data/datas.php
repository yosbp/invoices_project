<?php
    require_once "dataForTables.php";
    $datos=(isset($_GET['datas'])) ? $_GET['datas'] : '' ;
   

    if ($datos == "contributors") {
        echo $data_contributors;
    };

    if ($datos == "invoices") {
        echo $data_invoices;
    };

    if ($datos == "users") {
        echo $data_users;
    };


