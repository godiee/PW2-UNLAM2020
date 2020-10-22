<?php

function sumatoriaPuntoA($array){
    $resultado = 0;
    for ($i = 0; $i < sizeof($array); $i++){
        if (is_string($array[$i])){
            return $resultado = "Hay un elemento no numerico, no se puede realizar la operacion";
        } else{
            $resultado += $array[$i];
        }
    }
    return $resultado;
}

function sumatoriaPuntoB($array){
    $resultado = 0;
    foreach ($array as $valor){
        if (is_string($valor)){
            return $resultado = "Hay un elemento no numerico, no se puede realizar la operacion";
        } else{
            $resultado += $valor;
        }
    }
    return $resultado;
}

function sumatoriaPuntoC($array){
    $resultado = 0;
    $i = 0;
    while ($i < sizeof($array)){
        if (is_string($array[$i])){
            return $resultado = "Hay un elemento no numerico, no se puede realizar la operacion";
        } else{
            $resultado += $array[$i];
        }
        $i++;
    }
    return $resultado;
}
