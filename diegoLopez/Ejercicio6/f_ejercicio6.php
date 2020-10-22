<?php
function validarCampo($dimension)
{
    if (!isset($dimension) || !is_numeric($dimension) || $dimension < 1) {
        $dimension = "Error";
    } else {
        $dimension = $_GET["dimension"];
    }
    return $dimension;
}

function inicializarMatriz($dimension, &$matriz)
{
    $valor = 1;
    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = $valor++;
        }
    }
    return $matriz;
}

function diagonalPrincipal($matriz, $dimension)
{
    $diagonalPrincipal = array();
    for ($i = 0; $i < $dimension; $i++) {
        $diagonalPrincipal[$i] = $matriz[$i][$i];
    }
    return $diagonalPrincipal;
}

function diagonalSecundaria($matriz, $dimension)
{
    $aux = $dimension;
    $diagonalSecundaria = array();
    for ($i = 0; $i < $dimension; $i++) {
        $diagonalSecundaria[$i] = $matriz[$i][--$aux];
    }
    return $diagonalSecundaria;
}

function sumarTodosLosElementos($matriz, $dimension)
{
    $valor = 0;
    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $valor += $matriz[$i][$j];
        }
    }
    return $valor;
}
