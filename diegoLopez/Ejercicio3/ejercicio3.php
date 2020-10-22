<?php
require ("f_ejercicio3.php");
$dados = $_POST["dados"];
$valorObtenido = 0;
echo "<br><br>" . "El valor obtenido es: " . calcularResultado($valorObtenido,$dados);