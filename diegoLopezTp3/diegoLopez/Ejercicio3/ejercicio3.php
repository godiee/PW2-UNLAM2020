<?php

function concatenar($parametro1,$parametro2){
    $resultado = "No se puede realizar la concatenacion algun parametro no es un texto";
    if (is_string($parametro1) && is_string($parametro2)){
        $resultado = $parametro1 . $parametro2;
    }
    return $resultado;
}