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
        '<div class="alert bg-success bg-opacity-50 text-center">
            <strong>CONTRIBUYENTE ELIMINADO!</strong><br>
            El contribuyente se elimino exitosamente
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
    '<div class="alert bg-danger bg-opacity-50 text-center">
    <strong>¡Ocurrio un error inesperado!</strong><br>
    No existe el cobtribuyente seleccionado
    </div>';
};

$check_contributor = null;
