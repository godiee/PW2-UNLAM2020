<?php
function resultadoPedido($pedidos,$menu){
    $mensaje = "El comensal pidio: ";
    foreach ($pedidos as $valor){
        if(isset($valor)){
            $mensaje .= $menu[$valor] . " ";
        }
    }
    if($mensaje == "El comensal pidio: "){
        $mensaje .= "nada esta a dieta";
    }
    return $mensaje . ".";
}