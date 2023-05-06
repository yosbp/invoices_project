<header class="app-header fixed-top">
  <div class="app-header-inner">
    <div class="container-fluid py-2">
      <div class="app-header-content">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto">
            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                <title>Menu</title>
                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
              </svg>
            </a>
          </div>
          <!--//col-->
          <div class="search-mobile-trigger d-sm-none col">
            <i class="search-mobile-trigger-icon fas fa-search"></i>
          </div>
          <!--//col-->

          <div class="app-utilities col-auto">
            <div class="app-utility-item app-user-dropdown dropdown">
              <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img class="rounded-circle" style="width: 36px; height: 36px;" src="assets/img/avatar.jpg" alt="user profile" /></a>
              <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                <li>
                  <a class="dropdown-item" href=".?view=logout">Cerrar Sesión</a>
                </li>
              </ul>
            </div>
            <!--//app-user-dropdown-->
          </div>
          <!--//app-utilities-->
        </div>
        <!--//row-->
      </div>
      <!--//app-header-content-->
    </div>
    <!--//container-fluid-->
  </div>
  <!--//app-header-inner-->
  <div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
      <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
      <div class="app-branding text-center">
        <a href=".?view=dashboard"><img style="width: 125px; height: 56px;" src="./assets/img/logo-aseo.webp" alt=""></a>
      </div>
      <!--//app-branding-->

      <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
        <ul class="app-menu list-unstyled accordion" id="menu-accordion">
          <li class="nav-item">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <a class="nav-link <?php if ($_GET['view'] == 'dashboard') { echo 'active';}?>" href=".?view=dashboard">
              <span class="nav-icon">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg>
              </span>
              <span class="nav-link-text">Home</span> </a><!--//nav-link-->
          </li>

          <!--Item Contribuyentes-->

          <li class="nav-item">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <a class="nav-link <?php if ($_GET['view'] == 'contributor_list' || $_GET['view'] == 'contributor_new' || $_GET['view'] == 'contributor_edit') { echo 'active';}?>" href=".?view=contributor_list">
              <span class="nav-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                </svg>
              </span>
              <span class="nav-link-text">Contribuyentes</span> </a><!--//nav-link-->
          </li>

          <!--Facturas Aseo-->

          <li class="nav-item has-submenu">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <a class="nav-link submenu-toggle <?php if ($_GET['view'] == 'invoice_select' || $_GET['view'] == 'invoice_new' || $_GET['view'] == 'invoice_list') { echo 'active';}?>" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="<?php if ($_GET['view'] == 'invoice_select' || $_GET['view'] == 'invoice_new' || $_GET['view'] == 'invoice_list') { echo 'true';} else {echo 'false';}?>" aria-controls="submenu-2">
              <span class="nav-icon">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                </svg>
              </span>
              <span class="nav-link-text ">Factura Aseo</span>
              <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg> </span><!--//submenu-arrow--> </a><!--//nav-link-->
            <div id="submenu-2" class="collapse submenu submenu-2 <?php if ($_GET['view'] == 'invoice_select' || $_GET['view'] == 'invoice_new' || $_GET['view'] == 'invoice_list') { echo 'show';}?>" data-bs-parent="#menu-accordion">
              <ul class="submenu-list list-unstyled">
                <li class="submenu-item">
                  <a class="submenu-link <?php if ($_GET['view'] == 'invoice_select' || $_GET['view'] == 'invoice_new') { echo 'active';}?>" href=".?view=invoice_select">Generar Factura</a>
                </li>
                <li class="submenu-item">
                  <a class="submenu-link <?php if ($_GET['view'] == 'invoice_list') { echo 'active';}?>" href=".?view=invoice_list">Lista de Facturas</a>
                </li>
              </ul>

          <!--Item USUARIOS-->
          <li class="nav-item">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <a class="nav-link <?php if ($_SESSION['user'] != 'admin') { echo 'd-none';}?> <?php if ($_GET['view'] == 'user_list' || $_GET['view'] == 'user_new') { echo 'active';}?>" href=".?view=user_list">
              <span class="nav-icon">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                  <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                </svg>
              </span>
              <span class="nav-link-text">Usuarios</span> </a><!--//nav-link-->
          </li>
            </div>
          </li>
        </ul>
        <!--//app-menu-->
      </nav>
      <!--//app-nav-->
    </div>
    <!--//sidepanel-inner-->
  </div>
  <!--//app-sidepanel-->
</header>
<!--//app-header-->