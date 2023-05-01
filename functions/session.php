<?php

session_name('mi_sesion');
session_start();

if (!isset($_SESSION['id'])){
    header("Location: ?view=login");
}

?>