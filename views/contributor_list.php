<?php
require_once "./inc/session.php";
?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        <h3 class="text-center mt-5">Lista de Contribuyentes</h3>

        <div class="mx-auto" style="width: 90%;">
            <?php
            if (isset($_GET['property_id_del'])) {
                require_once  "./php/property_delete.php";
            }
            ?>
            <div id="table_property"></div>
        </div>

    </div>


    <script type="module">
        import {
            propertytable
        } from "./assets/js/tablas.js";

        propertytable();
    </script>