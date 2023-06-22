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
        <img src="../assets/img/logo-aseo.webp" alt="Logo">
        <p>INVERSIONES BICENTENARIO 2017, C.A.
            <br> DIRECCIÓN: EDIFICIO INDUSTRIAL, PISO 1, SECTOR APARAY, OFICINA N°1
            <br> CÚA, ESTADO MIRANDA J-404073426
            <br>Correo: aseourdaneta@gmail.com
            <br>Página Web: www.aseourdaneta.com
        </p>
        <div class="factura">
            <span>Factura: <br></span>
            <span style="font-weight: normal; color: red;"><?php echo str_pad($id, 11, "0", STR_PAD_LEFT) ?></span>
        </div>
    </div>

    <!-- datos de factura -->
    <table class="roundcorner divisor">
        <thead>
            <tr>
                <th style="text-align:center; width: 20%;">Cod Cliente</th>
                <th style="border-left:1px solid black; width: 20%;">Patente/Registro</th>
                <th style="border-left:1px solid black; width: 20%;">RIF/C.I</th>
                <th style="border-left:1px solid black; width: 20%;">Catastro</th>
                <th style="border-left:1px solid black; width: 20%;">Fecha</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="text-align:center"><?php echo str_pad($invoice['contribuyente_id'], 11, "0", STR_PAD_LEFT) ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['registro']; ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['rif_cedula'] ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo $invoice['catastro'] ?></td>
                <td style="text-align:center; border-left:1px solid black;"><?php echo date("d-m-Y", strtotime($invoice['fecha'])) ?></td>
            </tr>

            <tr>
                <th colspan="3" style="text-align:left; padding-top:10px">Nombre o Razón social</th>
                <th colspan="2" style="text-align:left; padding-top:10px; border-left:1px solid black;">Dirección del Inmueble</th>
            </tr>
            <tr>
                <td colspan="3" style="text-align:left; padding-top:5px; padding-bottom:10px;"><?php echo $invoice['razon_social'] ?></td>
                <td colspan="2" style="text-align:left; padding-top:5px; padding-bottom:10px; border-left:1px solid black;"><?php echo 'Edo. Miranda, Cúa, Sector ' . $invoice['sector'] . ' ' . $invoice['casa'] ?></td>
            </tr>
            <tr>
                <th colspan="3" style="text-align:left; padding-top:10px;">Observaciones</th>
                <th colspan="2" style="text-align:left;border-left:1px solid black; padding-top:10px;">Mes a Pagar</th>
            </tr>
            <tr>
                <td colspan="3" style="text-align:left; padding-top:5px; padding-bottom:10px;"><?php echo isset($invoice['nota']) && !empty($invoice['nota']) ? $invoice['nota'] : '-'; ?></td>
                <td colspan="2" style="text-align:left; border-left:1px solid black; padding-top:5px; padding-bottom:10px;"><?php echo $invoice['mes_pagado']; ?></td>
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
            <td style="text-align:center;border-left:1px solid black;"><?php echo number_format(floor($invoice['item1_valor']*100)/100, 2,'.', '') ?></td>
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
            <td style="text-align:center;border-left:1px solid black;"><?php echo number_format(floor($invoice['item1_valor']*100)/100, 2,'.', '')  ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">IVA 16%</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo number_format(floor($invoice['iva']*100)/100, 2,'.', '') ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: end; font-weight: bold;">VALOR TOTAL</td>
            <td style="text-align:center;border-left:1px solid black;"><?php echo number_format(floor($invoice['monto_total']*100)/100, 2,'.', '') ?></td>
        </tr>
    </table>

    <div style="position: relative;">
        <img src="../assets/img/imprimir.png" alt="Botón de impresión" onclick="window.print()" class="imagen-btn" width="50" height="50">
    </div>
</body>

</html>