<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-8 col-lg-5 ">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-4 p-lg-5 text-black">
                        
                        <form method="POST" autocomplete="off">
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 fw-bold mb-0 text-center"><img src="assets\img\logo-alcaldia.png" class="w-50 "></span>
                            </div>

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia Sesión</h5>

                            <div class="form-outline mb-4">
                                <input class="form-control form-control-lg" type="text" name="login_user" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                                <label class="form-label" for="form2Example17">Nombre de Usuario</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input class="form-control form-control-lg" type="password" name="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                                <label class="form-label" for="form2Example27">Contraseña</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                            </div>

                            <?php
                            if (isset($_POST['login_user']) && isset($_POST['login_password'])) {

                                require_once "./controllers/login.php";
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>