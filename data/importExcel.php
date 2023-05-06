<?php
require_once "../functions/main.php";

$tipo       = $_FILES['dataExcel']['type'];
$tamanio    = $_FILES['dataExcel']['size'];
$archivotmp = $_FILES['dataExcel']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $save_data = connect();
    if ($i != 0) {

        $datos = explode(";", $linea);
        
        $razon_social          = !empty($datos[0])   ? (str_replace('"', '', $datos[0])) :  '';
        $rif_cedula            = !empty($datos[1])   ? ($datos[1]) :  '';
        $email                 = !empty($datos[2])  ?  ($datos[2]) : '';
        $licencia              = !empty($datos[3])  ?  ($datos[3]) : '';
        $registro              = !empty($datos[4])  ?  ($datos[4]) : '';
        $direccion             = !empty($datos[5])  ? ($datos[5]) : '';
        $telefono_celular      = !empty($datos[6])  ? ($datos[6]) : '';
        $telefono_local        = !empty($datos[7])  ? ($datos[7]) : '';

        
        $save_data = $save_data->prepare("INSERT INTO contributors (razon_social, rif_cedula, email, telefono_celular, telefono_local, licencia, registro, direccion) VALUES (:razon_social, :rif_cedula, :email, :telefono_celular, :telefono_local, :licencia, :registro, :direccion)");

        $marks = [
            ":razon_social" => $razon_social,
            ":rif_cedula" => $rif_cedula,
            ":email" => $email,
            ":telefono_celular" => $telefono_celular,
            ":telefono_local" => $telefono_local,
            ":licencia" => $licencia,
            ":registro" => $registro,
            ":direccion" => $direccion
        ];

        $save_data->execute($marks);
    }
    $i++;
}

?>

<div class="container">
    <div class="alert alert-success text-center" role="alert">
        Se han cargado <?php echo $i - 1 ?> Registros!!

        <br>

        <a href="?view=contributors_list"> Atras</a>
    </div>