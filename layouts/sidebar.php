<div class="row flex-nowrap">
    <div class="col-auto col-sm-4 col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 text-black min-vh-100">
            <!-- Logo -->
            <a href=".?view=dashboard" class="mx-auto text-black text-decoration-none mt-3 text-center">
                <img class="col-6 d-none d-sm-inline" src="./assets/img/logo-alcaldia.png" alt="">
                <img class="d-sm-none" width="30" height="40" src="./assets/img/logo-alcaldia.png" alt=""> <!-- Logo for mobile view-->
            </a>
            <!-- Home Button -->
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <a href=".?view=dashboard" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                    </a>
                </li>
                <li>
                    <a href=".?view=contributor_list" class="nav-link px-0"><i class="fs-4 bi-people"></i><span class="ms-1 d-none d-sm-inline">Contribuyentes</span></a>
                    <!-- Gestion de Facturas submenu -->
                    <a href="#main" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Gestion de Facturas</span> </a>

                    <ul class="collapse show nav flex-column ms-1" id="main" data-bs-parent="#menu">

                        <!-- Invoices Submenu -->
                        <li class="w-100">
                            <a href="#invoices" data-bs-toggle="collapse" class="nav-link px-0">
                                <i class="bi bi-person-add"></i> <span class="d-none d-sm-inline">Facturas Impuestos</span> </a>
                            <ul class="collapse nav flex-column ps-0" id="invoices" data-bs-parent="#menu2">
                                <li class="w-100">
                                    <a href=".?view=invoice_select" class="nav-link"> <span class="d-none d-sm-inline">Generar Factura</span></a>
                                </li>
                                <li>
                                    <a href=".?view=invoice_list" class="nav-link"> <span class="d-none d-sm-inline">Lista de Facturas</span></a>
                                </li>
                            </ul>
                        </li>

                        <!-- Aseo Submenu -->
                        <li>
                            <a href="#employees" data-bs-toggle="collapse" class="nav-link px-0">
                                <i class="bi bi-people"></i><span class="d-none d-sm-inline"> Aseo Impuestos</span> </a>
                            <ul class="collapse nav flex-column ps-0" id="employees" data-bs-parent="#menu3">
                                <li class="w-100">
                                    <a href=".?view=invoice_service_select" class="nav-link"> <span class="d-none d-sm-inline">Generar Factura</span></a>
                                </li>
                                <li class="w-100">
                                    <a href=".?view=invoice_service_new" class="nav-link"> <span class="d-none d-sm-inline">Lista de Facturas</span></a>
                                </li>
                            </ul>
                        </li>

                        <!-- Others Submenu -->
                        <!--                         <li class="w-100">
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
                            <a href="" class="nav-link px-0"><i class="bi bi-inboxes"></i><span class="d-none d-sm-inline"> Configuracion</span></a>
                        </li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Sidebar -->