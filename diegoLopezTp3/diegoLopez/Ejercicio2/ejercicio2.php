<?php
//PuntoA
function binomioCuadradoPerfectoPuntoA($valor1,$valor2){
    $resultado = "No se puede realizar la operacion";
    if (is_numeric($valor1) && is_numeric($valor2)){
        $resultado = ($valor1+$valor2) * ($valor1+$valor2);
    }
    return $resultado;
}

//PuntoB
function binomioCuadradoPerfectoPuntoB($valor1,$valor2){
    $resultado = "No se puede realizar la operacion";
    if (is_numeric($valor1) && is_numeric($valor2)){
        $resultado = ($valor1*$valor1) + (2*$valor1*$valor2) + ($valor2 * $valor2);
    }
    return $resultado;
}