<?php 

require_once "../functions/main.php";

$id = $_GET['id'];
$data = connect();
$data = $data->query("SELECT DISTINCT invoices.*, contributors.*
FROM invoices
INNER JOIN contributors
ON invoices.contribuyente_id = contributors.id
WHERE invoices.id = $id");

$invoice = $data->fetch(PDO::FETCH_ASSOC); // obtiene la primera fila como un array asociativo

$data=null;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>

    <!-- medidas del logo en fondo como marca de agua -->
    <style>
        body {
            margin-top: 80px;
            margin-bottom: 50px;
            margin-right: 170px;
            margin-left: 170px;

            /*logo de fondo en marca de agua*/

            background-image: url("../assets/img/logo-fondo.png");
            /*background-repeat: no-repeat;*/
            background-size: 10% 10%;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/invoice.css">
    <link rel="stylesheet" media="print" href="../assets/css/invoice.css">
</head>

<body>
    <!-- encabezado -->
    <div class="header">
        <img src="../assets/img/logo-alcaldia.png" alt="Logo">
        <p>REPÚBLICA BOLIVARIANA DE VENEZUELA
            <br> ALCALDÍA DEL MUNICIPIO "GENERAL RAFAEL URDANETA"
            <br> SUPERINTENDENCIA MUNICIPAL DE ADMINISTRACIÓN TRIBUTARIA DE URDANETA
            <br> CÚA, ESTADO MIRANDA G-20016491-3
        </p>
    </div>

    <!-- datos de factura -->
    <br>
    <table class="roundcorner">
        <thead>
            <tr>
                <th style="text-align:center;">Num Factura</th>
                <th style="border-left:1px solid black;">Licencia/Registro</th>
                <th style="border-left:1px solid black;">RIF/C.I</th>
                <th style="border-left:1px solid black;">Placa</th>
                <th style="border-left:1px solid black;">Catastro</th>
                <th style="border-left:1px solid black;">Liq. Fiscal</th>
                <th style="border-left:1px solid black;">Fecha</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="text-align:center"><?php echo str_pad($id, 11, "0", STR_PAD_LEFT) ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['municipio']?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['rif_cedula']?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['placa']?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['catastro']?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['liq_fiscal']?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo date("d-m-Y", strtotime($invoice['fecha']))?></td>
            </tr>

            <tr>
                <th colspan="4" style="text-align:left; padding-top:10px;">Razón social</th>
                <th colspan="4" style="text-align:left; padding-top:10px; border-left:1px solid black;">Dirección</th>
            </tr>
            <tr>
                <td colspan="4" style="text-align:left; padding-top:5px; padding-bottom:10px; "><?php echo $invoice['razon_social']?></td>
                <td colspan="4" style="text-align:left; padding-top:5px; padding-bottom:10px; border-left:1px solid black;">cua</td>
            </tr>
            <tr>
                <th colspan="7" style="text-align:left; padding-top:10px;">Nota</th>
            </tr>
            <tr>
                <td colspan="7" style="text-align:left; padding-top:5px; padding-bottom:10px;"><?php echo $invoice['nota']?></td>
            </tr>
        </tbody>
    </table>

    <br>

    <!-- Items Imputacion Imponible -->
    <table class="roundcorner">
        <tr>
            <th scope="col">Item</th>
            <th scope="col" style="border-left:1px solid black; text-align: start;">Imputación Presupuestaria</th>
            <th scope="col" style="border-left:1px solid black;">Monto</th>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;">01</td>
            <td style="border-left:1px solid black;"><?php echo $invoice['item1']?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['item1_valor']?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"><?php if ($invoice['item2'] != '') { echo '02';} ?></td>
            <td style="border-left:1px solid black;"><?php if ($invoice['item2'] != '') { echo $invoice['item2'];} ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php if ($invoice['item2'] != '') { echo $invoice['item2_valor'];} else {echo '-';} ?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"><?php if ($invoice['item3'] != '') { echo '03';} ?></td>
            <td style="border-left:1px solid black;"><?php if ($invoice['item3'] != '') { echo $invoice['item3'];} ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php if ($invoice['item3'] != '') { echo $invoice['item3_valor'];} else {echo '-';} ?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"><?php if ($invoice['item4'] != '') { echo '04';} ?></td>
            <td style="border-left:1px solid black;"><?php if ($invoice['item4'] != '') { echo $invoice['item4'];} ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php if ($invoice['item4'] != '') { echo $invoice['item4_valor'];} else {echo '-';} ?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"><?php if ($invoice['item5'] != '') { echo '05';} ?></td>
            <td style="border-left:1px solid black;"><?php if ($invoice['item5'] != '') { echo $invoice['item5'];} ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php if ($invoice['item5'] != '') { echo $invoice['item5_valor'];} else {echo '-';} ?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"><?php if ($invoice['item6'] != '') { echo '06';} ?></td>
            <td style="border-left:1px solid black;"><?php if ($invoice['item6'] != '') { echo $invoice['item6'];} ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php if ($invoice['item6'] != '') { echo $invoice['item6_valor'];} else {echo '-';} ?></td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">Total</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['monto_total']?></td>
        </tr>
    </table>

    <!-- icono/boton para imprimir -->

    <div style="position: relative;">
        <img src="../assets/img/imprimir.png" alt="Botón de impresión" onclick="imprimir()" class="imagen-btn" width="50" height="50">
    </div>

    <head>
        <script>
            function imprimir() {
                // Abre una nueva ventana con la vista previa de impresión
                window.print();
            }
        </script>

        <!-- Estilos CSS para ajustar el tamaño de impresión -->
        <style media="print">
            @page {
                size: A4 portrait;
                margin: 0.5cm;
            }

            body {
                width: 100%;
                margin: 0 auto;
                font-size: 30px;
            }
        </style>

    </head>




</body>

</html>