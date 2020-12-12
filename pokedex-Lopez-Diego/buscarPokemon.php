<?php
include_once ("BaseDeDatos.php");
session_start();
$consultas = new BaseDeDatos();
$pokemonABuscar = $_POST["pokemonABuscar"];


if($pokemonABuscar == ""){
    $_SESSION["pokemon"] = $consultas->dameTodosLosPokemons();
}elseif (is_numeric($pokemonABuscar)){
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorId($pokemonABuscar);
}else{
    $_SESSION["pokemon"] = $consultas->buscarPokemonPorNombre($pokemonABuscar);
}

header("Location: index.php");
