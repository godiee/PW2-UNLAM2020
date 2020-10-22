<?php
require ("f_ejercicio4.php");

$planeta = $_POST["planeta"];
$nombreDeVisitante = validarVisitante($_POST["nombreDeVisitante"]);
if($nombreDeVisitante == "Error"){
    exit("Error en el campo");
}
$visitante = array("nombreDeVisitante" => $nombreDeVisitante , "planeta" => $planeta);
$ruta = "../recursos/visitantes.json";
manejoDeArchivo($ruta, $visitante);
$visitantes = obtenerVisitantes($ruta);
mostrarVisitantes($visitantes);
echo "<br>" . "Hay " . contadorDeExtraterrestres($ruta) . " extraterrestres.";