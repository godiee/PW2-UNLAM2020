<?php

function validarVisitante($nombreVisitante){
    if (isset($nombreVisitante) && $nombreVisitante != "" && !is_numeric($nombreVisitante)){
        $nombreVisitante = $_POST["nombreDeVisitante"];
    }else{
        $nombreVisitante = "Error";
    }
    return $nombreVisitante;
}

function manejoDeArchivo(string $ruta, array $visitante)
{
    if (file_exists($ruta)) {
        $contenidoCompleto = file_get_contents($ruta);
        $json_deco = json_decode($contenidoCompleto);
        array_push($json_deco, $visitante);
        file_put_contents($ruta, json_encode($json_deco));
    } else {
        $json = array();
        array_push($json, $visitante);
        $pf = fopen($ruta, "w");
        fwrite($pf, json_encode($json));
        fclose($pf);
    }
}

function obtenerVisitantes($archivoJson){
    $json = file_get_contents($archivoJson);
    return json_decode($json , true);
}

function mostrarVisitantes($visitantes){
    foreach ($visitantes as $valor){
        echo "Nombre: " . $valor["nombreDeVisitante"] .", Planeta: ". $valor["planeta"] . "<br>";
    }
}

function contadorDeExtraterrestres($archivoJson){
    $json = file_get_contents($archivoJson);
    $array = json_decode($json , true);
    $contadorEt = 0;
    for ($i = 0; $i < sizeof($array); $i++){
        if($array[$i]["planeta"] != "Tierra"){
            $contadorEt++;
        }
    }
    return $contadorEt;
}