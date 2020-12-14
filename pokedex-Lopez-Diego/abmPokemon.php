<?php
session_start();
require_once("BaseDeDatos.php");
$consultas = new BaseDeDatos();

if (is_null($_SESSION["usuario"])) header("Location: index.php");

switch ($_POST["accion"]){
    case "insertar":
        $result = $consultas->insertarPokemon($_POST["numero"],$_POST["nombre"],$_POST["imagen"],$_POST["tipo"],$_POST["descripcion"],$_POST["imagenInterno"]);
        break;
    case "modificar":
        $result = $consultas->modificarPokemon($_POST["numero"],$_POST["nombre"],$_POST["imagen"],$_POST["tipo"],$_POST["descripcion"],$_POST["imagenInterno"],$_POST["id_original"]);
        break;
    case "eliminar":
        if ($_POST["delete"] == 'true') $result = $consultas->eliminarPokemon($_POST["id"]);
        break;

}
$_SESSION["abm"] = $result ? "Operacion exitosa." : "No se pudo realizar la operacion.";
header("Location: index.php");