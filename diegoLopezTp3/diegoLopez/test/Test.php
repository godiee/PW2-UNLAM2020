<?php

use PHPUnit\Framework\TestCase;
require_once ("../Ejercicio1/ejercicio1.php");
require_once ("../Ejercicio2/ejercicio2.php");
require_once ("../Ejercicio3/ejercicio3.php");
require_once ("../Ejercicio4/ejercicio4.php");
require_once ("../Ejercicio5/ejercicio5.php");
require_once ("../Ejercicio6/NombreCompleto.php");


final class Test extends TestCase
{
    public function testQueDeFreneCuandoEstaEnRojo(){
        $input = "rojo";
        $valorEsperado = "frene";

        $valorObtenido = semaforoPuntoA($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoB($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoC($input);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testQueDePrecaucionCuandoEstaEnAmarillo(){
        $input = "amarillo";
        $valorEsperado = "precaucion";

        $valorObtenido = semaforoPuntoA($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoB($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoC($input);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testQueDeAvanceCuandoEstaEnVerde(){
        $input = "verde";
        $valorEsperado = "avance";

        $valorObtenido = semaforoPuntoA($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoB($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoC($input);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testQueAlIngresarBasuraMeDeMensajeDeError(){
        $input = "12aaxz2";
        $valorEsperado = "Estado Desconocido";

        $valorObtenido = semaforoPuntoA($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoB($input);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = semaforoPuntoC($input);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeBinomioCuadradoPerfecto(){
        $valor1 = 3;
        $valor2 = 2;
        $valorEsperado = 25;

        $valorObtenido = binomioCuadradoPerfectoPuntoA($valor1, $valor2);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = binomioCuadradoPerfectoPuntoB($valor1, $valor2);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeBinomioQueDaErrorAlTenerAlgunParametroNoNumerico(){
        $valor1 = "a";
        $valor2 = 2;
        $valorEsperado = "No se puede realizar la operacion";

        $valorObtenido = binomioCuadradoPerfectoPuntoA($valor1, $valor2);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = binomioCuadradoPerfectoPuntoB($valor1, $valor2);
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeConcatenar(){
        $valor1 = "hola";
        $valor2 = "mundo";

        $valorEsperado = "holamundo";
        $valorObtenido = concatenar($valor1,$valor2);

        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testQueDaMensajeDeErrorAlConcatenarCuandoUnParametroNoEsUnTexto(){
        $valor1 = 1;
        $valor2 = "mundo";

        $valorEsperado = "No se puede realizar la concatenacion algun parametro no es un texto";
        $valorObtenido = concatenar($valor1,$valor2);

        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeIncrementarPorReferencia(){
        $valor1 = 2;
        $valorEsperado = 3;

        incrementar($valor1);

        $this->assertEquals($valorEsperado,$valor1);
    }
    public function testDeQueAlTratarDeIncrementarUnValorNoNumericoDeError(){
        $valor1 = "a";
        $valorEsperado = "No es un valor numerico";
        $valorObtenido = incrementar($valor1);

        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeSumatoria(){
        $miArray = array(5,5,5,5,5);
        $valorEsperado = 25;

        $valorObtenido = sumatoriaPuntoA($miArray);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = sumatoriaPuntoB($miArray);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = sumatoriaPuntoC($miArray); 
        $this->assertEquals($valorEsperado,$valorObtenido);
    }
    public function testDeSumatoriaCuandoEncuentraUnValorNoNumericoDaError(){
        $miArray = array("a","b",2,3,5);
        $valorEsperado = "Hay un elemento no numerico, no se puede realizar la operacion";

        $valorObtenido = sumatoriaPuntoA($miArray);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = sumatoriaPuntoB($miArray);
        $this->assertEquals($valorEsperado,$valorObtenido);

        $valorObtenido = sumatoriaPuntoC($miArray);
        $this->assertEquals($valorEsperado,$valorObtenido);      
    }
    public function testSaludoFormalMasculino(){
        $persona = new NombreCompleto("Diego","Lopez","Masculino");
        $valorEsperado = "Estimado Sr.Diego Lopez";
        $valorObtenido = $persona->saludoFormal();

        $this->assertEquals($valorEsperado, $valorObtenido);
    }
    public function testSaludoFormalFemenino(){
        $persona = new NombreCompleto("Adriana","Diaz","Femenino");
        $valorEsperado = "Estimada Sra.Adriana Diaz";
        $valorObtenido = $persona->saludoFormal();

        $this->assertEquals($valorEsperado, $valorObtenido);
    }
    public function testSaludoInformal(){
        $persona = new NombreCompleto("Adriana","Diaz","Femenino");
        $persona2 = new NombreCompleto("Diego","Lopez","Masculino");
        $valorEsperado = "Hola Adriana";
        $valorObtenido = $persona->saludoInformal();

        $this->assertEquals($valorEsperado, $valorObtenido);

        $valorEsperado = "Hola Diego";
        $valorObtenido = $persona2->saludoInformal();
        $this->assertEquals($valorEsperado, $valorObtenido);
    }
    public function testParaCasoDeSexoMalIngresado(){
        $persona = new NombreCompleto("Diego","Lopez",1);
        $valorEsperado = "Sexo mal ingresado";

        $valorObtenido = $persona->saludoFormal();
        $this->assertEquals($valorEsperado, $valorObtenido);

        $valorObtenido = $persona->saludoInformal();
        $this->assertEquals($valorEsperado, $valorObtenido);
    }
}



