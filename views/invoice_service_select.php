<?php
require_once "./functions/main.php";
?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        
        <div class="form-rest">
            <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
        </div>

        <h3 class="mt-5 text-center">Crear Factura Aseo</h3>

        <h4 class="mt-5 ms-5">Selecciona el contribuyente:</h4>
        <div class="ms-5 w-50" >
            <div id="table"></div>
        </div>

    </div>

</div>

<script type="module">
        import {
            newInvoiceServiceTable
        } from "./assets/js/tablas.js";

        newInvoiceServiceTable();
    </script>