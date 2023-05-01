<?php
require_once "../functions/main.php";

// Almacenando datos recibidos del formulario
$contribuyente_id = intval($_POST["contribuyente_id"]);
$creado_por = clean_data($_POST["creado_por"]);
$tipo = clean_data($_POST["tipo"]);
$nota = clean_data($_POST["nota"]);
$item1 = clean_data($_POST["item1"]);
$item1_valor = clean_data($_POST["item1_valor"]);
$item2 = isset($_POST["item2"]) && !empty($_POST["item2"]) ? clean_data($_POST["item2"]) : "";
$item2_valor = isset($_POST["item2_valor"]) && !empty($_POST["item2_valor"]) ? clean_data($_POST["item2_valor"]) : 0;
$item3 = isset($_POST["item3"]) && !empty($_POST["item3"]) ? clean_data($_POST["item3"]) : "";
$item3_valor = isset($_POST["item3_valor"]) && !empty($_POST["item3_valor"]) ? clean_data($_POST["item3_valor"]) : 0;
$item4 = isset($_POST["item4"]) && !empty($_POST["item4"]) ? clean_data($_POST["item4"]) : "";
$item4_valor = isset($_POST["item4_valor"]) && !empty($_POST["item4_valor"]) ? clean_data($_POST["item4_valor"]) : 0;
$item5 = isset($_POST["item5"]) && !empty($_POST["item5"]) ? clean_data($_POST["item5"]) : "";
$item5_valor = isset($_POST["item5_valor"]) && !empty($_POST["item5_valor"]) ? clean_data($_POST["item5_valor"]) : 0;
$item6 = isset($_POST["item6"]) && !empty($_POST["item6"]) ? clean_data($_POST["item6"]) : "";
$item6_valor = isset($_POST["item6_valor"]) && !empty($_POST["item6_valor"]) ? clean_data($_POST["item6_valor"]) : 0;
$monto_total = $item1_valor + $item2_valor + $item3_valor + $item4_valor + $item5_valor + $item6_valor;

//Guardando datos en la BD

$save_invoice = connect();
$save_invoice = $save_invoice->prepare("INSERT INTO invoices (contribuyente_id, creado_por, tipo, nota, item1, item1_valor, item2, item2_valor, item3, item3_valor, item4, item4_valor, item5, item5_valor, item6, item6_valor, monto_total)
VALUES (:contribuyente_id, :creado_por, :tipo, :nota, :item1, :item1_valor, :item2, :item2_valor, :item3, :item3_valor, :item4, :item4_valor, :item5, :item5_valor, :item6, :item6_valor, :monto_total)");


$marks = [
    ":contribuyente_id" => $contribuyente_id,
    ":creado_por" => $creado_por,
    ":tipo" => $tipo,
    ":nota" => $nota,
    ":item1" => $item1,
    ":item1_valor" => $item1_valor,
    ":item2" => $item2,
    ":item2_valor" => $item2_valor,
    ":item3" => $item3,
    ":item3_valor" => $item3_valor,
    ":item4" => $item4,
    ":item4_valor" => $item4_valor,
    ":item5" => $item5,
    ":item5_valor" => $item5_valor,
    ":item6" => $item6,
    ":item6_valor" => $item6_valor,
    ":monto_total" => $monto_total
];

// Verifica y ejecuta toda la operacion
$save_invoice->execute($marks);

if (($save_invoice->rowCount() == 1)) {
    echo '
        <div class="alert bg-success bg-opacity-50 text-center">
        <strong>FACTURA REGISTRADA!</strong><br>
        La Factura se registró exitosamente
        </div>
        ';
} else {
    echo '
        <div class="alert bg-danger bg-opacity-50 text-center">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        No se pudo la Factura, por favor intente nuevamente.
        </div>
        ';
}

if (isset($_POST['catastro'])) {
    $catastro = clean_data($_POST['catastro']);

    $save_contributor = connect();

    $save_contributor = $save_contributor->prepare("UPDATE contributors SET catastro=:catastro WHERE id=$contribuyente_id");

    $marks = [
        ":catastro" => $catastro,
    ];

    $save_contributor->execute($marks);
    $save_contributor = null;
}

if (isset($_POST['liq_fiscal'])) {
    $liq_fiscal = clean_data($_POST['liq_fiscal']);

    $save_contributor = connect();

    $save_contributor = $save_contributor->prepare("UPDATE contributors SET liq_fiscal=:liq_fiscal WHERE id=$contribuyente_id");

    $marks = [
        ":liq_fiscal" => $liq_fiscal,
    ];

    $save_contributor->execute($marks);
    $save_contributor = null;
}

if (isset($_POST['placa'])) {
    $placa = clean_data($_POST['placa']);

    $save_contributor = connect();

    $save_contributor = $save_contributor->prepare("UPDATE contributors SET placa=:placa WHERE id=$contribuyente_id");

    $marks = [
        ":placa" => $placa,
    ];

    $save_contributor->execute($marks);
    $save_contributor = null;
}



$save_invoice = null;
