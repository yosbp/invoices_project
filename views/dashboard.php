<?php
include_once "./functions/main.php";

$data = connect();
$data = $data->query("SELECT * FROM contributors");
$contribuyentes_cantidad = $data->rowCount();
$data=null;

$data = connect();
$data = $data->query("SELECT * FROM invoices");
$facturas_cantidad = $data->rowCount();
$data=null;

$data = connect();
$data = $data->query("SELECT * FROM invoices_service");
$facturas_aseo_cantidad = $data->rowCount();
$data=null;
?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php"?>
    <div class="col px-0 text-center">
        <?php include "./layouts/navbar.php" ?>
        <h1 class="mt-5">Bienvenid@ <?php echo $_SESSION['name']?></h1>
        <div class="row justify-content-center mt-5">
            <div class="col-xl-3 col-sm-6 col-12 mb-5">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h5 class="col" font-bold> Total Facturas Impuestos</h5>
                        <div class="row">
                            <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $facturas_cantidad ?></span> </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Desde el mes pasado</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h5 class="col" font-bold> Total Facturas de aseo</h5>
                        <div class="row">
                            <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $facturas_aseo_cantidad ?></span> </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Desde el mes pasado</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h5 class="col" font-bold> Total Contribuyentes</h5>
                        <div class="row">
                            <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $contribuyentes_cantidad ?></span> </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Desde el mes pasado</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>