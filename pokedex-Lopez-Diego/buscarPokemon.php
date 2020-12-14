<?php
include_once("BaseDeDatos.php");
session_start();
$consultas = new BaseDeDatos();
$pokemonABuscar = $_POST["pokemonABuscar"];
if (isset($_GET["id"]) && isset($_SESSION["usuario"])) $pokemonABuscar = $_GET["id"];
if(isset($_GET["ver"])) $pokemonABuscar = $_GET["ver"];

if($pokemonABuscar == ""){
    $_SESSION["pokemon"] = $consultas->dameTodosLosPokemons();
}elseif (is_numeric($pokemonABuscar)){
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorId($pokemonABuscar);
}else{
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorNombre($pokemonABuscar);
}

if (isset($_GET["id"]) && isset($_SESSION["usuario"])){
    switch ($_GET["accion"]){
        case 1:
            header("Location: index.php?accion=1");
            break;
        case 2:
            header("Location: index.php?accion=3");
            break;
        default:
            header("Location: index.php");
            break;
    }
}else{
    isset($_GET["ver"]) ? header("Location: index.php?accion=4") : header("Location: index.php");
}





