<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        <h3 class="text-center mt-5">Lista de Contribuyentes</h3>
        
        <div class="mx-auto" style="width: 90%;">
        <a href=".?view=contributor_new" class="btn btn-primary" role="button">Nuevo Contribuyente</a>
            <?php
            if (isset($_GET['contributor_delete'])) {
                require_once  "./controllers/contributors_delete.php";
            }
            ?>
            <div id="table_contributors"></div>
        </div>

    </div>


    <script type="module">
        import {
            contributorsTable
        } from "./assets/js/tablas.js";

        contributorsTable();
    </script>