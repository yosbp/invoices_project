<nav class="bg-light p-3">
    <div class="container-fluid d-flex flex-row-reverse">
        <!-- Dropdown Profile -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./assets/img/avatar.jpg" alt="" width="40" height="40" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="./views/settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
        <div class="input-group">
            <input type="text" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-3 my-md-0 mw-300 navbar-search bg-light border-0 small rounded-3" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        </div>
    </div>
</nav>