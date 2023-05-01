<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        <h3 class="text-center mt-5">Lista de Facturas</h3>

        <div class="mx-auto" style="width: 90%;">
            <?php

            ?>
            <div id="table_invoices"></div>
        </div>

    </div>


    <script type="module">
        import {
            invoiceTable
        } from "./assets/js/tablas.js";

        invoiceTable();
    </script>