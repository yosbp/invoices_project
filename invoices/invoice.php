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

$data = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="../assets/css/invoice.css">
    <link rel="stylesheet" media="print" href="../assets/css/invoice.css">
</head>

<body>
    <!-- encabezado -->
    <div class="header divisor">
        <img src="../assets/img/logo-aseo-factura.webp" alt="Logo">
        <p>INVERSIONES BICENTENARIO 2017, C.A.
            <br> DIRECCIÓN: EDIFICIO INDUSTRIAL, PISO 1, SECTOR APARAY, OFICINA N°1
            <br> CÚA, ESTADO MIRANDA J-404073426
            <br>Telefono: 0414-xxx-xxxx
            <br>Correo: aseourdaneta@gmail.com
            <br>Página Web: www.aseourdaneta.com
        </p>
    </div>

    <!-- datos de factura -->
    <table class="roundcorner divisor">
        <thead>
            <tr>
                <th style="text-align:center;">Num Factura</th>
                <th style="border-left:1px solid black;">Licencia/Registro</th>
                <th style="border-left:1px solid black;">RIF/C.I</th>
                <th style="border-left:1px solid black;">Aseo</th>
                <th style="border-left:1px solid black;">Fecha</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="text-align:center"><?php echo str_pad($id, 11, "0", STR_PAD_LEFT) ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php if ($invoice['licencia'] != '') {
                                                                                echo $invoice['licencia'];
                                                                            } else {
                                                                                echo $invoice['registro'];
                                                                            } ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['rif_cedula'] ?></td>
                <td style="text-align:center; border-left:1px solid black;">V24561232</td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo date("d-m-Y", strtotime($invoice['fecha'])) ?></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align:left; padding-top:10px">Razón social</th>
                <th colspan="4" style="text-align:left; padding-top:10px; border-left:1px solid black;">Dirección</th>
            </tr>
            <tr>
                <td colspan="2" style="text-align:left; padding-top:5px; padding-bottom:10px;"><?php echo $invoice['razon_social'] ?></td>
                <td colspan="4" style="text-align:left; padding-top:5px; padding-bottom:10px; border-left:1px solid black;"><?php echo 'Edo. Miranda, Cúa, Sector ' . $invoice['sector'] . ' ' . $invoice['casa'] ?></td>
            </tr>
            <tr>
                <th colspan="7" style="text-align:left; padding-top:10px;">Nota</th>
            </tr>
            <tr>
                <td colspan="7" style="text-align:left; padding-top:5px; padding-bottom:10px;"><?php echo $invoice['nota'] ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Items Imputacion Imponible -->
    <table class="roundcorner">
        <tr>
            <th scope="col">Item</th>
            <th scope="col" style="border-left:1px solid black; text-align: start;">Imputación Presupuestaria</th>
            <th scope="col" style="border-left:1px solid black;">Monto</th>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;">01</td>
            <td style="border-left:1px solid black;"><?php echo $invoice['item1'] ?></td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['item1_valor'] ?></td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"></td>
            <td style="border-left:1px solid black;"></td>
            <td style="text-align:center;border-left:1px solid black;">-</td>
        </tr>
        <tr>
            <td style="width:1vw;text-align:center;"></td>
            <td style="border-left:1px solid black;"></td>
            <td style="text-align:center;border-left:1px solid black;">-</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">Base imponible</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['item1_valor'] ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">IVA 16%</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['iva'] ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">VALOR TOTAL</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo $invoice['monto_total'] ?></td>
        </tr>
    </table>

    <div style="position: relative;">
        <img src="../assets/img/imprimir.png" alt="Botón de impresión" onclick="window.print()" class="imagen-btn" width="50" height="50">
    </div>
</body>

</html>