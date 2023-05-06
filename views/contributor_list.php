<h1 class="app-page-title text-center">Lista de Contribuyentes</h1>
<div class="mx-auto" style="width: 100%;">
    <a href=".?view=contributor_new" class="btn btn-primary" role="button">Nuevo Contribuyente</a>
    <?php
    if (isset($_GET['contributor_delete'])) {
        require_once  "./controllers/contributors_delete.php";
    }
    ?>
    <div id="table_contributors"></div>
</div>



<script type="module">
    import {
        contributorsTable
    } from "./assets/js/tablas.js";

    contributorsTable();
</script>