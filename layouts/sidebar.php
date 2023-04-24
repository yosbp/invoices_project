<div class="row flex-nowrap">
    <div class="col-auto col-sm-4 col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 text-black min-vh-100">
            <!-- Logo -->
            <a href="?view=dashboard" class="mx-auto text-black text-decoration-none mt-3">
                <img class="col-4 col-md-5 col-lg-4 col-xl-4 col-xxl-3 d-none d-sm-inline" src="./assets/img/logo.png" alt="">
                <img class="d-sm-none" width="30" height="40" src="./assets/img/logo.png" alt=""> <!-- Logo for mobile view-->
            </a>
            <!-- Home Button -->
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <a href="?view=dashboard" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                    </a>
                </li>
                <li>
                    <!-- HR Management submenu -->
                    <a href="#employee" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">HR Management</span> </a>

                    <ul class="collapse show nav flex-column ms-1" id="employee" data-bs-parent="#menu">

                        <!-- Invoices Submenu -->
                        <li class="w-100">
                            <a href="#recruitment" data-bs-toggle="collapse" class="nav-link px-0">
                                <i class="bi bi-person-add"></i> <span class="d-none d-sm-inline">Facturas</span> </a>
                            <ul class="collapse nav flex-column ps-0" id="recruitment" data-bs-parent="#menu2">
                                <li class="w-100">
                                    <a href="?view=invoice_new" class="nav-link"> <span class="d-none d-sm-inline">Nueva Factura</span></a>
                                </li>
                                <li>
                                    <a href="?view=invoice_list" class="nav-link"> <span class="d-none d-sm-inline">Lista de Facturas</span></a>
                                </li>
                            </ul>
                        </li>

                        <!-- Contributors Submenu -->
                        <li>
                            <a href="#employees" data-bs-toggle="collapse" class="nav-link px-0">
                                <i class="bi bi-people"></i><span class="d-none d-sm-inline"> Contribuyentes</span> </a>
                            <ul class="collapse nav flex-column ps-0" id="employees" data-bs-parent="#menu3">
                                <li class="w-100">
                                    <a href="?view=contributor_list" class="nav-link"> <span class="d-none d-sm-inline">Lista de Contribuyentes</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="?view=contributor_new" class="nav-link"> <span class="d-none d-sm-inline">Nuevo Contribuyente</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- Others Submenu -->
                        <li class="w-100">
                            <a href="#transactions" data-bs-toggle="collapse" class="nav-link px-0">
                                <i class="bi bi-wallet2"></i> <span class="d-none d-sm-inline">Otros</span> </a>
                            <ul class="collapse nav flex-column ps-0" id="transactions" data-bs-parent="#menu2">
                                <li class="w-100">
                                    <a href="" class="nav-link"> <span class="d-none d-sm-inline">Liquidaciones</span></a>
                                </li>
                                <li>
                                    <a href="" class="nav-link"> <span class="d-none d-sm-inline">Licencias</span></a>
                                </li>
                                <li>
                                    <a href="" class="nav-link"> <span class="d-none d-sm-inline"> Solvencias</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?view=configuration" class="nav-link px-0"><i class="bi bi-inboxes"></i><span class="d-none d-sm-inline"> Configuracion</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Sidebar -->