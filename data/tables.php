<?php

require_once "../functions/main.php";

$data = connect();
$data = $data->query("SELECT * FROM contributors");

$datos_contributors = $data->fetchAll();
$datos_contributors = json_encode($datos_contributors);
$quantity_contributors = $data->rowCount();

$data=null;

$data = connect();
$data = $data->query("SELECT invoices.*, contributors.razon_social
FROM invoices
INNER JOIN contributors
ON invoices.contribuyente_id = contributors.id");

$data_invoices = $data->fetchAll();
$data_invoices = json_encode($data_invoices);
$facturas_cantidad = $data->rowCount();

$data=null;
