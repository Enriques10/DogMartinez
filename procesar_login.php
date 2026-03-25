<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

/* SIMULACIÓN DE LOGIN */
if($usuario != "" && $password != ""){

    $_SESSION['usuario'] = $usuario;
    $_SESSION['foto'] = "default.png";

    header("Location: index.php");

}else{
    echo "Error al iniciar sesión";
}
?>