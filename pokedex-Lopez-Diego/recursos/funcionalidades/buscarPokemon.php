<?php
include_once("BaseDeDatos.php");
session_start();
$consultas = new BaseDeDatos();
$pokemonABuscar = $_POST["pokemonABuscar"];
if (isset($_GET["id"]) && isset($_SESSION["usuario"])) $pokemonABuscar = $_GET["id"];

if($pokemonABuscar == ""){
    $_SESSION["pokemon"] = $consultas->dameTodosLosPokemons();
}elseif (is_numeric($pokemonABuscar)){
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorId($pokemonABuscar);
}else{
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorNombre($pokemonABuscar);
}

isset($_GET["id"]) && isset($_SESSION["usuario"]) ? header("Location: ../../index.php?accion=1") : header("Location: ../../index.php");
