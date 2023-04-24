<?php
include_once "./php/tables.php";
require_once "./inc/session.php";

?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0 text-center">
        <?php include "./layouts/navbar.php" ?>
        <h1 class="mt-5">Welcome Admin Name</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-xl-3 col-sm-6 col-12 mb-5">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h5 class="col" font-bold> Total Facturas</h5>
                        <div class="row">
                            <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $quantity_type ?></span> </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h5 class="col" font-bold> Total Contribuyentes</h5>
                        <div class="row">
                            <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2"></span> <span class="h3 font-bold mb-0"><?php echo $quantity_property ?></span> </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>