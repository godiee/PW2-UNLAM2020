<?php
session_start();

if ($_GET["logout"]){
    unset($_SESSION["usuario"]);
}else{
    include_once("BaseDeDatos.php");
    $consultar = new BaseDeDatos();
    $resultado = $consultar->conectarUsuario($_POST["usuario"], md5($_POST["clave"]));
    $_SESSION["usuario"] = $resultado ? $resultado["user_name"] : "Error";
}

header("Location: index.php");