<?php
require_once "../functions/main.php";

// Almacenando datos recibidos del formulario

$id = $_POST["contributor_id"];

$razon_social = clean_data($_POST["razon_social"]);
$rif = $_POST["rif_tipo"].clean_data($_POST["rif"]);
$correo = clean_data($_POST["correo"]);
$telefono_movil = clean_data($_POST["telefono_movil"]);
$telefono_local = clean_data($_POST["telefono_local"]);
$licencia = clean_data($_POST["licencia"]);
$registro = clean_data($_POST["registro"]);
$estado = clean_data($_POST["estado"]);
$ciudad = clean_data($_POST["ciudad"]);
$municipio = clean_data($_POST["municipio"]);
$parroquia = clean_data($_POST["parroquia"]);
$eje = clean_data($_POST["eje"]);
$sector = clean_data($_POST["sector"]);
$comunidad = clean_data($_POST["comunidad"]);
$calle = clean_data($_POST["calle"]);
$casa = clean_data($_POST["casa"]);
$referencia = clean_data($_POST["referencia"]);

//Guardando datos en la BD

$save_contributor = connect();
$save_contributor = $save_contributor->prepare("UPDATE contributors SET razon_social=:razon_social, rif_cedula=:rif_cedula, email=:email, telefono_celular=:telefono_celular, telefono_local=:telefono_local, licencia=:licencia, registro=:registro, estado=:estado, ciudad=:ciudad, municipio=:municipio, parroquia=:parroquia, eje=:eje, sector=:sector, calle=:calle, casa=:casa, comunidad=:comunidad, referencia=:referencia WHERE id=$id");

$marks = [
    ":razon_social" => $razon_social,
    ":rif_cedula" => $rif,
    ":email" => $correo,
    ":telefono_celular" => $telefono_movil,
    ":telefono_local" => $telefono_local,
    ":licencia" => $licencia,
    ":registro" => $registro,
    ":estado" => $estado,
    ":ciudad" => $ciudad,
    ":municipio" => $municipio,
    ":parroquia" => $parroquia,
    ":eje" => $eje,
    ":sector" => $sector,
    ":calle" => $calle,
    ":casa" => $casa,
    ":comunidad" => $comunidad,
    ":referencia" => $referencia,
];

//Verifica y Ejecuta toda la operacion

$save_contributor->execute($marks);

if (($save_contributor->rowCount() == 1)) {
    echo '
        <div class="alert bg-success bg-opacity-50 text-center">
        <strong>CONTRIBUYENTE Actualizado!</strong><br>
        El contribuyente se ha actualizado exitosamente
        </div>
        ';
} else {
    echo '
        <div class="alert bg-danger bg-opacity-50 text-center">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        No se pudo el actualizar contribuyente, por favor intente nuevamente.
        </div>
        ';
}

$save_contributor = null;
