<?php
    $usario = "pw2";
    $password = "123456";
    $bd = "pokemons_Lopez_diego";
    $port = "3306";

$conexion = mysqli_connect("PW2-mysql",$usario,$password,$bd,$port) or die("Error al conectarse");

$sql = "SELECT gif FROM pokemon";

$consulta = mysqli_query($conexion , $sql);

while ($resultado = $consulta->fetch_assoc()){
    echo "<img class='w3-image' src='$resultado[gif]' alt='foto'>" . "Su ruta es $resultado[gif]" . "<br>";
}

mysqli_close($conexion); //cerrar conexion

