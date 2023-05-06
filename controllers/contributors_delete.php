<?php

require_once "./functions/main.php";

$id = clean_data($_GET['contributor_delete']);

// Verificando que la categoria exista para eliminarla

$check_contributor = connect();
$check_contributor = $check_contributor->query("SELECT id FROM contributors WHERE id='$id'");

if ($check_contributor->rowCount() == 1) {

    $delete_contributor = connect();
    $delete_contributor = $delete_contributor->prepare("DELETE FROM contributors WHERE id=:id");

    $delete_contributor->execute([":id" => $id]);

    if ($delete_contributor->rowCount() == 1) {

        echo
        '
        <div id="alerta" class="app-card shadow-sm mb-4 text-success bg-success p-2 bg-opacity-10 fw-bold" role="alert">
            <div class="inner">
                <div class="app-card-body p-3 p-lg-4">
                    <div class="row text-center">
                        <div class="">
                            CONTRIBUYENTE ELIMINADO!.<br>' . 'El Contribuyente se eliminó exitosamente' .
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
            Hubo un error al intentar eliminar el contribuyente, intente de nuevo.
            </div>';
    }

    $delete_contributor = null;
} else {
    echo
    '
    <div id="alerta" class="app-card shadow-sm mb-4 text-danger bg-danger p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <div class="row text-center">
                    <div class="">
                    ¡Ocurrio un error inesperado!.<br>' . 'No existe el contribuyente seleccionado' .
                    '</div>
                </div>
            </div>
        </div>
    </div>
    ';
};

$check_contributor = null;
