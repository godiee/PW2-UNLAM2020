<?php
require_once ("Ejercicio1/ejercicio1.php");
require_once ("Ejercicio2/ejercicio2.php");
require_once ("Ejercicio3/ejercicio3.php");
require_once ("Ejercicio4/ejercicio4.php");
require_once ("Ejercicio5/ejercicio5.php");
require_once ("Ejercicio6/NombreCompleto.php");
$valor = "";
$persona = new NombreCompleto("Diego","Lopez","Masculino");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Diego Lopez Tp3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
</head>
<body>
<main class="w3-content w3-container w3-border w3-border-blue">
    <h1 class="w3-center">LOPEZ DIEGO</h1>
    <article class="w3-container">
        <h2>Ejercicio 1: Semáforo</h2>
        <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.</p>
        <ul>
            <li>a) Resuelva la solución utilizando if else</li>
            <li>b) Resuelva la solución utilizando if inline (return ?: )</li>
            <li>c) Resuelva la solución utilizando switch</li>
        </ul>
        <p class="w3-panel w3-pale-red w3-center">Ingreso color rojo y como resultado me devuelve <?php echo semaforoPuntoA("rojo");?>
        <br>
        Ingreso color amarillo y como resultado me devuelve <?php echo semaforoPuntoA("amarillo");?>
        <br>
        Ingreso color verde y como resultado me devuelve <?php echo semaforoPuntoA("verde");?>
        <br>
        Ingreso valor erroneo "basura" y me devuelve <?php echo semaforoPuntoA("basura");?></p>
    </article>
    <article class="w3-container">
        <h2>Ejercicio 2: Binomio cuadrado perfecto</h2>
        <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2</p>
        <ul>
            <li>a) Resuelva la solución utilizando la función de potencia</li>
            <li>b) Resuelva la solución utilizando la fórmula desarrollada del binomio: a^2 + 2*a*b + b^2</li>
        </ul>
        <p class="w3-panel w3-pale-red w3-center w3-padding-16">Ingreso en a = 7 y en b = 3 y mi resultado es:<?php echo binomioCuadradoPerfectoPuntoA(3,7);?></p>
    </article>
    <article class="w3-container">
        <h2>Ejercicio 3: Concatenar textos</h2>
        <p>Cree una función llamada concatenar que reciba dos textos y devuelva ambos textos concatenados
            como uno solo</p>
        <p class="w3-panel w3-pale-red w3-center w3-padding-16">Ingreso primer valor "hola" y segundo valor "mundo" y me devuelve:
        <?php echo concatenar("hola","mundo");?></p>
    </article>
    <article class="w3-container">
        <h2>Ejercicio 4: Incrementar</h2>
        <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
            la función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros por
            referencia)</p>
        <p class="w3-panel w3-pale-red w3-center w3-padding-16">Ingreso el valor
            <?php echo $valor = 2?> y me devuelve <?php echo incrementar($valor)?></p>
    </article>
    <article class="w3-container">
        <h2>Ejercicio 5: Sumatoria</h2>
        <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores</p>
        <ul>
            <li>a) Resuelva la solución utilizando la estructura de control for</li>
            <li>b) Resuelva la solución utilizando la estructura de control for each</li>
            <li>c) Resuelva la solución utilizando la estructura de control while</li>
        </ul>
        <p class="w3-panel w3-pale-red w3-center w3-padding-16">Ingreso un array con los siguientes valores 7 , 3 , 5 , 2 y me devuelve
            <?php
            $valor = array(7,3,5,2);
            echo sumatoriaPuntoB($valor);?></p>
    </article>
    <article class="w3-container">
        <h2>Ejercicio 6: Nombre completo</h2>
        <p>Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,
            apellido y sexo por parámetro. <br>
            <br>
            Dicha clase debe implementar el método saludoFormal() el cual debe responder “Estimado Sr
            /Estimada Sra” según corresponda, nombre y apellido.
            <br><br>
            Ej: “Estimado Sr. Facundo D’Aranno”
            Dicha clase debe implementar también el método saludoInformal() el cual debe responder “Hola
            Nombre”. Ej: “Hola Facundo</p>
        <p class="w3-panel w3-pale-red w3-center w3-padding-16">Creo un objeto llamado persona con los siguientes atributos
            Nombre: Diego , Apellido: Lopez , Sexo: Masculino y sus metodos me devuelven: <br>
            <?php echo $persona->saludoFormal();
            echo "</br>";
            echo $persona->saludoInformal();?></p>
    </article>
</main>
</body>
</html>