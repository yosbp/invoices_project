<?php

require_once "../functions/main.php";

$data = connect();
$data = $data->query("SELECT * FROM contributors");

$data_contributors = $data->fetchAll();
$data_contributors = json_encode($data_contributors);

$data=null;

$data = connect();
$data = $data->query("SELECT invoices.*, contributors.razon_social
FROM invoices
INNER JOIN contributors
ON invoices.contribuyente_id = contributors.id
ORDER BY invoices.id DESC");


$data_invoices = $data->fetchAll();
$data_invoices = json_encode($data_invoices);

$data=null;

$data = connect();
$data = $data->query("SELECT * FROM users");

$data_users = $data->fetchAll();
$data_users = json_encode($data_users);

$data=null;