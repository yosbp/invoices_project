<?php if ($_SESSION['user'] != 'admin') { echo '<div id="noadmin"></div>';}?>

<div class="form-rest">
    <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
</div>

<h1 class="app-page-title text-center">Nuevo Usuario</h1>

<form action="./controllers/users_store.php" id="form" class="FormularioAjax mx-auto mt-5" method="POST" autocomplete="off">

    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">

    <h5 class="mb-4">Información Personal</h5>
    <div class="row mb-4">
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label"><strong>Nombre</strong></label>
                <input type="text" class="form-control" required name="nombre" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label"><strong>Apellido</strong></label>
                <input type="text" class="form-control" required name="apellido" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label"><strong>Posición</strong></label>
                <input type="text" class="form-control" required name="posicion" />
            </div>
        </div>
    </div>

    <div class="row mb-4">

        <div class="col-4">
            <div class="form-outline">
                <label class="form-label"><strong>Nombre de Usuario</strong></label>
                <input type="text" class="form-control" required name="usuario" />
            </div>
        </div>
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label"><strong>Contraseña</strong></label>
                <input type="password" class="form-control" required name="contraseña" />
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" id="enviar" class="btn btn-primary btn-block mb-4 text-center ">Guardar</button>
    </div>
</form>

<script>

    // Obtener el botón de enviar
    var formulario = document.getElementById("form");

    // Verificar si existe un elemento con id="alerta"
    if (document.getElementById("noadmin")) {
        // Si existe, añadir el atributo "disabled" al botón
        formulario.style.display = "none";
    }
    
</script>