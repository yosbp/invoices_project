<?php

require_once "./functions/main.php";

$id = clean_data($_GET['user_delete']);

if ($id == 1 || $id == '1') {
    echo '
    <div id="alerta" class="app-card shadow-sm mb-4 text-danger bg-danger p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <h6 class="mb-0">Selecciona otro usuario, no puede borrar el administrador</h6>
            </div>
        </div>
    </div>
    ';
    exit;
}

// Verificando que la categoria exista para eliminarla

$check_user = connect();
$check_user = $check_user->query("SELECT id FROM users WHERE id='$id'");

if ($check_user->rowCount() == 1) {

    $delete_user = connect();
    $delete_user = $delete_user->prepare("DELETE FROM users WHERE id=:id");

    $delete_user->execute([":id" => $id]);

    if ($delete_user->rowCount() == 1) {

        echo
        '
        <div id="alerta" class="app-card shadow-sm mb-4 text-success bg-success p-2 bg-opacity-10 fw-bold" role="alert">
            <div class="inner">
                <div class="app-card-body p-3 p-lg-4">
                    <div class="row text-center">
                        <div class="">
                            USUARIO ELIMINADO!.<br>' . 'El usuario se eliminó exitosamente' .
            '</div>
                    </div>
                </div>
            </div>
        </div>
        ';
    } else {
        echo
        '<div class="alert bg-danger bg-opacity-50 text-center">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            Hubo un error al intentar eliminar el usuario, intente de nuevo.
            </div>';
    }

    $delete_user = null;
} else {
    echo
    '
    <div id="alerta" class="app-card shadow-sm mb-4 text-danger bg-danger p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <div class="row text-center">
                    <div class="">
                    ¡Ocurrio un error inesperado!.<br>' . 'No existe el usuario seleccionado' .
        '</div>
                </div>
            </div>
        </div>
    </div>
    ';
};

$check_user = null;
