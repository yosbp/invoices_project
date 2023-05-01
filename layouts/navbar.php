<nav class="bg-light p-3">
    <div class="container-fluid d-flex flex-row-reverse">
        <!-- Dropdown Profile -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./assets/img/avatar.jpg" alt="" width="40" height="40" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['name']?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
<!--                 <li><a class="dropdown-item" href="./views/settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li> -->
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href=".?view=logout">Cerrar Sesión</a></li>
            </ul>
        </div>
    
    </div>
</nav>