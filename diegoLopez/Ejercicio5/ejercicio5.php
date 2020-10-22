<?php
require ("f_ejercicio5.php");
$menu = parse_ini_file("../recursos/menu.ini");
$pedidos=array($_GET["entrada"],$_GET["plato_principal"],$_GET["acompanamiento"],$_GET["postre"]);
echo resultadoPedido($pedidos,$menu);
