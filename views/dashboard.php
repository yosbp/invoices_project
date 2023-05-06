<?php
include_once "./functions/main.php";

$data = connect();
$data = $data->query("SELECT * FROM contributors");
$contribuyentes_cantidad = $data->rowCount();
$data = null;

$data = connect();
$data = $data->query("SELECT * FROM invoices");
$facturas_aseo_cantidad = $data->rowCount();
$data = null;
?>

<h1 class="app-page-title">Dashboard</h1>

<div class="app-card shadow-sm mb-4 border-left-decoration" role="alert">
    <div class="inner">
        <div class="app-card-body p-3 p-lg-4">
            <h3 class="mb-3">Hola, <?php echo $_SESSION['name']?>!</h3>
            <div class="row gx-5 gy-3">
                <div class="col-12">
                    <div>
                    ¡Saludos! Te damos la más cordial bienvenida al Portal de Gestión de Facturas de Inversiones Bicentenario 2017 C.A.. ¡Juntos podemos hacer grandes cosas!
                    </div>
                </div>
            </div>
        </div>
        <!--//app-card-body-->
    </div>
    <!--//inner-->
</div>

<div class="row justify-content-evenly mt-5">
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h5 class="col" font-bold> Total Facturas</h5>
                <div class="row">
                    <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $facturas_aseo_cantidad ?></span> </div>
                </div>
                <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Desde el mes pasado</span> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 text-center">
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