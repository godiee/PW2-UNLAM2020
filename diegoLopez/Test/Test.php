<?php
use PHPUnit\Framework\TestCase;
require_once("../Ejercicio6/f_ejercicio6.php");
require_once("../Ejercicio4/f_ejercicio4.php");
require_once ("../Ejercicio3/f_ejercicio3.php");
require_once ("../Ejercicio5/f_ejercicio5.php");

final class Test extends TestCase
{
    public function testDeInicializarMatriz(){
        $matrizEsperada = array(array());
        $matrizObtenida = array(array());
        $dimension = 3;
        $valor = 1;

        for ($i = 0; $i < $dimension; $i++){
            for ($j = 0; $j < $dimension; $j++){
                $matrizEsperada[$i][$j] = $valor++;
            }
        }

        $matrizObtenida = inicializarMatriz($dimension , $matrizObtenida);

        $this->assertEquals(sizeof($matrizEsperada) , sizeof($matrizObtenida));
    }

    public function testValidarCampoDeMatrizCuandoIngresoUnValorNoNumericoDaError(){
        $error =  validarCampo("a");
        $this->assertEquals("$error", "Error");
    }

    public function testObtenerDiagonalPrincipalParaUnaMatriz3x3(){
        $matriz = array(array());
        $valorEsperado = array(1,5,9);
        $valorObtenido = inicializarMatriz(3,$matriz);
        $valorObtenido = diagonalPrincipal($valorObtenido,3);

        for ($i = 0; $i < sizeof($valorEsperado); $i++){
            $this->assertEquals($valorEsperado[$i],$valorObtenido[$i]);
        }
    }

    public function testObtenerDiagonalSecundariaParaUnaMatriz3x3(){
        $matriz = array(array());
        $valorEsperado = array(3,5,7);
        $valorObtenido = inicializarMatriz(3,$matriz);
        $valorObtenido = diagonalSecundaria($valorObtenido,3);

        for ($i = 0; $i < sizeof($valorEsperado); $i++){
            $this->assertEquals($valorEsperado[$i],$valorObtenido[$i]);
        }
    }

    public function testObtenerLaSumaDeTodosLosElementosDeUnaMatriz3x3(){
        $matriz = array(array());
        $dimension = 3;
        $valor = 1;

        for ($i = 0; $i < $dimension; $i++){
            for ($j = 0; $j < $dimension; $j++){
                $matriz[$i][$j] = $valor++;
            }
        }

        $valorEsperado = 45;
        $valorObtenido = sumarTodosLosElementos($matriz,$dimension);

        $this->assertEquals($valorEsperado, $valorObtenido);
    }

    public function testValidarVisitanteDaErrorCuandoPasoUnValorNumerico(){
        $valorEsperado = "Error";
        $valorObtenido = validarVisitante("123");

        $this->assertEquals($valorEsperado, $valorObtenido);
    }

    public function testContadorDeExtraterrestres(){
        $ruta = "../recursos/visitantes.json";
        $valorEsperado = 3; //valor hardcodeado sacado de visitantes.json de la carpeta recursos
        $valorObtenido = contadorDeExtraterrestres($ruta);

        $this->assertEquals($valorEsperado, $valorObtenido);
    }

    public function testLanzarDadoTieneQueSerValoresEntreUnoOSeis(){
        $valorObtenido = lanzarDado();
        $condition = $valorObtenido >= 1 && $valorObtenido <= 6;

        $this->assertTrue($condition);
    }

    public function testQuePidoMasDeUnPlato(){
        $menu = parse_ini_file("../recursos/menu.ini");
        $pedidos = array("plato_principal","postre");
        $valorEsperado = "El comensal pidio: milanesa helado .";
        $valorObtenido = resultadoPedido($pedidos,$menu);

        $this->assertEquals("$valorEsperado", "$valorObtenido");
    }

    public function testQueAlNoPedirNadaMeDevuelveUnMensaje(){
        $menu = parse_ini_file("../recursos/menu.ini");
        $pedidos = array();
        $valorEsperado = "El comensal pidio: nada esta a dieta.";
        $valorObtenido = resultadoPedido($pedidos,$menu);

        $this->assertEquals("$valorEsperado", "$valorObtenido");
    }

    public function testQuePidoSolamenteUnPlato(){
        $menu = parse_ini_file("../recursos/menu.ini");
        $pedidos = array("postre");
        $valorEsperado = "El comensal pidio: helado .";
        $valorObtenido = resultadoPedido($pedidos,$menu);

        $this->assertEquals("$valorEsperado", "$valorObtenido");
    }
}
