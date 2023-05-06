<?php
require_once "../functions/main.php";

// Almacenando datos recibidos del formulario
$contribuyente_id = intval($_POST["contribuyente_id"]);
$creado_por = clean_data($_POST["creado_por"]);
$tipo = clean_data($_POST["tipo"]);
$nota = clean_data($_POST["nota"]);
$item1 = clean_data($_POST["item1"]);
$item1_valor = clean_data($_POST["item1_valor"]);
$iva = ($item1_valor) * 0.16;
$monto_total = $item1_valor + $iva;

//Guardando datos en la BD

$save_invoice = connect();
$save_invoice = $save_invoice->prepare("INSERT INTO invoices (contribuyente_id, creado_por, tipo, nota, item1, item1_valor, iva, monto_total) VALUES (:contribuyente_id, :creado_por, :tipo, :nota, :item1, :item1_valor, :iva, :monto_total)");


$marks = [
    ":contribuyente_id" => $contribuyente_id,
    ":creado_por" => $creado_por,
    ":tipo" => $tipo,
    ":nota" => $nota,
    ":item1" => $item1,
    ":item1_valor" => $item1_valor,
    ":iva" => $iva,
    ":monto_total" => $monto_total
];

// Verifica y ejecuta toda la operacion
$save_invoice->execute($marks);

if (($save_invoice->rowCount() == 1)) {
    echo '
    <div id="alerta" class="app-card shadow-sm mb-4 text-success bg-success p-2 bg-opacity-10 fw-bold" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <div class="row text-center">
                    <div>
                        FACTURA REGISTRADA!.<br>' . 'La Factura se registró exitosamente' .
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
                    ¡Ocurrio un error inesperado!.<br>' . 'No se pudo registrar la factura, por favor intente nuevamente.' .
                    '</div>
                </div>
            </div>
        </div>
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

$save_invoice = null;
