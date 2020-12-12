<?php
include_once ("BaseDeDatos.php");
$consultar = new BaseDeDatos();

$resultado = $consultar->conectarUsuario($_POST["usuario"], md5($_POST["clave"]));
if ($resultado){
    session_start();
    $_SESSION["Usuario"] = $resultado["user_name"];
}