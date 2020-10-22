<?php

class NombreCompleto
{
 private $nombre;
 private $apellido;
 private $sexo;

     public function __construct($nombre, $apellido, $sexo){
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->sexo = $sexo;
     }

    public function saludoFormal()
    {
        switch (mb_strtolower($this->sexo)) {
            case "masculino":
                $saludo = "Estimado Sr.$this->nombre $this->apellido";
                break;

            case "femenino":
                $saludo = "Estimada Sra.$this->nombre $this->apellido";
                break;

            default:
                $saludo = "Sexo mal ingresado";
                break;
        }
        return $saludo;
    }

    public function saludoInformal(){
         mb_strtolower($this->sexo) != ("femenino" && "masculino") ? $saludo = "Sexo mal ingresado" : $saludo = "Hola $this->nombre";
         return $saludo;
    }
}
