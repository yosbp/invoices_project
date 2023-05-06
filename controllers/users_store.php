<?php
require_once "../functions/main.php";

// Almacenando datos recibidos del formulario
$nombre = clean_data($_POST["nombre"]);
$apellido = clean_data($_POST["apellido"]);
$posicion = clean_data($_POST["posicion"]);
$usuario = clean_data($_POST["usuario"]);
$contraseña = clean_data($_POST["contraseña"]);


//Guardando datos en la BD

$save_user = connect();
$save_user = $save_user->prepare("INSERT INTO users (nombre, apellido, posicion, usuario, contrasena) VALUES (:nombre, :apellido, :posicion, :usuario, :contrasena)");

$marks = [
    ":nombre" => $nombre,
    ":apellido" => $apellido,
    ":posicion" => $posicion,
    ":usuario" => $usuario,
    ":contrasena" => $contraseña,
];

//Verifica y Ejecuta toda la operacion

$save_user->execute($marks);

if (($save_user->rowCount() == 1)) {
    echo '
    <div id="alerta" class="app-card shadow-sm mb-4 text-success bg-success p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <div class="row text-center">
                    <div>
                        USUARIO CREADO!.<br>' . 'El Usuario se creó exitosamente' .
        '</div>
                </div>
            </div>
        </div>
    </div>
        ';
} else {
    echo '
            <div id="alerta" class="app-card shadow-sm mb-4 text-danger bg-danger p-2 bg-opacity-10 fw-bold" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <div class="row text-center">
                            <div>
                            ¡Ocurrio un error inesperado!.<br>' . 'No se pudo crear el usuario, por favor intente nuevamente.' .
        '</div>
                        </div>
                    </div>
                </div>
            </div>
        ';
}

$save_user = null;
?>
