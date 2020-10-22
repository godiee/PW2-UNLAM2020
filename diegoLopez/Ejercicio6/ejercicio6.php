<?php
require("f_ejercicio6.php");
    $dimension = validarCampo($_GET["dimension"]);
    if ($dimension == "Error"){
        exit("Error en el campo");
    }
    $matriz = array(array());
    $matriz = inicializarMatriz($dimension , $matriz);
    $diagonalPrincipal = diagonalPrincipal($matriz , $dimension);
    $diagonalSecundaria = diagonalSecundaria($matriz , $dimension);
    echo "La diagonal principal es: |";
    foreach ($diagonalPrincipal as $value){
        echo " " . $value . " " ."|";
    }
    echo "<br>";
    echo "<br>" . "La diagonal secundaria es: |";
    foreach ($diagonalSecundaria as $value){
        echo " " . $value . " " ."|";
    }

    echo "<br>" . "<br>" . "El resultado de sumar todo los elementos de la matriz es: " . sumarTodosLosElementos($matriz , $dimension);