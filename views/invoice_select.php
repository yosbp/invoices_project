<?php
require_once "./functions/main.php";
?>

<div class="form-rest">
    <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
</div>

<h1 class="app-page-title text-center">Crear Factura Aseo</h1>

<h4>Selecciona el contribuyente:</h4>

<div style="width: fit-content;" id="table"></div>



<script type="module">
    import {
        newInvoiceServiceTable
    } from "./assets/js/tablas.js";

    newInvoiceServiceTable();
</script>