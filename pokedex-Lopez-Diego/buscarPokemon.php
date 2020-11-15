<?php
include_once ("BaseDeDatos.php");
include_once ("f_mostrarTabla.php");
$consultas = new BaseDeDatos();
$pokemonABuscar = $_POST["pokemonABuscar"];


if($pokemonABuscar == ""){
    $pokemon = $consultas->dameTodosLosPokemons();
}elseif (is_numeric($pokemonABuscar)){
    $pokemon = $consultas->buscarPokemonPorId($pokemonABuscar);
}else{
    $pokemon = $consultas->buscarPokemonPorNombre($pokemonABuscar);
}
?>

<!DOCTYPE html>
<html lang="es">
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-responsive">
    <h2>Basic Table</h2>
    <p>The w3-table class defines a basic table:</p>

    <table class="w3-table-all">
        <tr>
            <th>Nro</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        <?php mostrarPokemons($pokemon);?>
    </table>
</div>

</body>
</html>
