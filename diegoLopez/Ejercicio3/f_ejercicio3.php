<?php
function lanzarDado(){
    return rand(1,6);
}

function mostrarDado($resultado){
    switch ($resultado){
        case 1:
            echo "<img class='w3-image' src='../imagenes/dado/1.jpeg' alt='cara 1' width='200'>";
            break;

        case 2:
            echo "<img class='w3-image' src='../imagenes/dado/2.jpeg' alt='cara 2' width='200'>";
            break;

        case 3:
            echo "<img class='w3-image' src='../imagenes/dado/3.jpeg' alt='cara 3' width='200'>";
            break;

        case 4:
            echo "<img class='w3-image' src='../imagenes/dado/4.jpeg' alt='cara 4' width='200'>";
            break;

        case 5:
            echo "<img class='w3-image' src='../imagenes/dado/5.jpeg' alt='cara 5' width='200'>";
            break;

        case 6:
            echo "<img class='w3-image' src='../imagenes/dado/6.jpeg' alt='cara 6' width='200'>";
            break;
    }
}

function calcularResultado($valorObtenido, $dados){
    for ($i = 0; $i < $dados ; $i++){
        $resultado = lanzarDado();
        mostrarDado($resultado);
        $valorObtenido += $resultado;
    }
    return $valorObtenido;
}