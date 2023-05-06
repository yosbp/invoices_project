<?php
require_once "../functions/main.php";

// Almacenando datos recibidos del formulario
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
$user_id = clean_data($_POST["user_id"]);

//Guardando datos en la BD

$save_contributor = connect();
$save_contributor = $save_contributor->prepare("INSERT INTO contributors (razon_social, rif_cedula, email, telefono_celular, telefono_local, licencia, registro, estado, ciudad, municipio, parroquia, eje, sector, calle, casa, comunidad, referencia, user_id) VALUES (:razon_social, :rif_cedula, :email, :telefono_celular, :telefono_local, :licencia, :registro, :estado, :ciudad, :municipio, :parroquia, :eje, :sector, :calle, :casa, :comunidad, :referencia, :user_id)");

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
    ":user_id" => $user_id
];

//Verifica y Ejecuta toda la operacion

$save_contributor->execute($marks);

if (($save_contributor->rowCount() == 1)) {
    echo '
    <div id="alerta" class="app-card shadow-sm mb-4 text-success bg-success p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <div class="row text-center">
                    <div>
                        CONTRIBUYENTE REGISTRADO!.<br>' . 'El Contribuyente se registró exitosamente' .
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
                            ¡Ocurrio un error inesperado!.<br>' . 'No se pudo registrar el contribuyente, por favor intente nuevamente.' .
                            '</div>
                        </div>
                    </div>
                </div>
            </div>
        ';
}

$save_contributor = null;
