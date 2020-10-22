<?php
//Funcion A
function semaforoPuntoA($color){
    if ($color == "rojo"){
        $estado = "frene";}
    else if ($color == "amarillo"){
        $estado = "precaucion";}
    else if ($color == "verde"){
        $estado = "avance";}
    else{
        $estado ="Estado Desconocido";
    }
    return $estado;
}
//Funcion B
function semaforoPuntoB($color){
    return $estado = ($color == "rojo"? "frene": ($color == "amarillo" ? "precaucion": ($color == "verde" ? "avance" : $estado = "Estado Desconocido")));
}

//Funcion C
function semaforoPuntoC($color){
    switch ($color){
        case "rojo":
            $estado = "frene";
            break;

        case "amarillo":
            $estado = "precaucion";
            break;

        case "verde":
            $estado = "avance";
            break;

        default:
            $estado = "Estado Desconocido";
            break;
    }
    return $estado;
}