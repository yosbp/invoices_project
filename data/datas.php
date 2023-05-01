<?php
    require_once "tables.php";
    $datos=(isset($_GET['datas'])) ? $_GET['datas'] : '' ;
   

    if ($datos == "contributors") {
        echo $datos_contributors;
    };

    if ($datos == "invoices") {
        echo $data_invoices;
    };

