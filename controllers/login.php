<?php

require_once "./functions/main.php";

//Almacenando Datos
$username = clean_data($_POST["login_user"]);
$password = clean_data($_POST["login_password"]);

//Verificando Campos Obligatorios

if ($username == "" || $password == "") {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
            </div>';
    exit();
};

//Verificando integridad de los datos

if (verify_data("[a-zA-Z0-9]{4,20}", $username)) {
    echo '<div class="alert alert-danger mt-3 text-center">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        El USUARIO no coincide con el formato solicitado
        </div>';
    exit();
}

if (verify_data("[a-zA-Z0-9$@.-]{7,100}", $password)) {
    echo '<div class="alert alert-danger mt-3 text-center">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        La CLAVE no coincide con el formato solicitado
        </div>';
    exit();
}

$check_user = connect();
$check_user = $check_user->query("SELECT * FROM users WHERE username='$username'");

if ($check_user->rowCount() == 1) {
    $check_user = $check_user->fetch();

    if ($check_user['username'] == $username && $password == $check_user['password']) {

        session_set_cookie_params(1800);
        session_name('mi_sesion');
        session_start();
        $_SESSION['id'] = $check_user['id'];
        $_SESSION['name'] = $check_user['first_name'];
        $_SESSION['username'] = $check_user['username'];

        if (headers_sent()) {
            echo "<script>window.location.href='?view=dashboard'<script>";
        } else {
            header("Location: ?view=dashboard");
        }
    } else {
        echo '<div class="alert alert-danger mt-3 text-center">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            Usuario o clave incorrectos.
            </div>';
    }
} else {
    echo '<div class="alert alert-danger mt-3 text-center">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        Usuario o clave incorrectos.
        </div>';
}

$check_user = null;
