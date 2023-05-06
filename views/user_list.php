<?php if ($_SESSION['user'] != 'admin') { echo '<div id="noadmin"></div>';}?>

<h1 class="app-page-title text-center">Lista de Usuarios</h1>
<div id="form" class="mx-auto" style="width: 100%;">
    <a href=".?view=user_new" class="btn btn-primary" role="button">Nuevo Usuario</a>
    <?php
    if (isset($_GET['user_delete'])) {
        require_once  "./controllers/users_delete.php";
    }
    ?>
    <div style="width: fit-content;" id="table_users"></div>
</div>

<script type="module">
    import {
        usersTable
    } from "./assets/js/tablas.js";

    usersTable();

    // Obtener el botón de enviar
    var formulario = document.getElementById("form");

    // Verificar si existe un elemento con id="alerta"
    if (document.getElementById("noadmin")) {
        // Si existe, añadir el atributo "disabled" al botón
        formulario.style.display = "none";
    }
    
</script>