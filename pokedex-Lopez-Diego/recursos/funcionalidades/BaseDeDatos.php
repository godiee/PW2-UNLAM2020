<?php
session_start();

class BaseDeDatos
{
    private $host = "PW2-mysql";
    private $usario = "pw2";
    private $password = "123456";
    private $bd = "pokemons_Lopez_diego";
    private $port = "3306";
    private $conexion;

    private function conexion()
    {
        $this->conexion = mysqli_connect($this->host,$this->usario,$this->password,$this->bd,$this->port) or die("Error al conectarse");
    }

    public function buscarPokemonPorId($idPokemon){
        $this->conexion();
        $pokemon = array();
        $consulta = $this->conexion->query("SELECT * FROM pokemon WHERE  idPokemon = $idPokemon");
        if($this->conexion->affected_rows > 0){
            $pokemon[0] = $consulta->fetch_assoc();
            mysqli_close($this->conexion);
        }else{
            $pokemon = $this->dameTodosLosPokemons();
            $_SESSION["error"] = 1;

        }
        return $pokemon;
    }

    public function buscarPokemonPorNombre($nombrePokemon){
        $this->conexion();
        $pokemon = array();
        $consulta = $this->conexion->query("SELECT * FROM pokemon WHERE  nombre = '$nombrePokemon'");
        if($this->conexion->affected_rows > 0){
            $pokemon[0] = $consulta->fetch_assoc();
            mysqli_close($this->conexion);
        }else{
            $pokemon = $this->dameTodosLosPokemons();
            $_SESSION["error"] = 1;
        }

        return $pokemon;
    }

    public function dameTodosLosPokemons(){
        $this->conexion();
        $pokemon = null;
        $lista = array(array());
        $i = 0;
        $consulta = $this->conexion->query("SELECT * FROM pokemon");
        while ($pokemon = $consulta->fetch_assoc()){
            $lista[$i] = $pokemon;
            $i++;
        }
        mysqli_close($this->conexion);
        return $lista;
    }

    public function conectarUsuario($usuario,$clave){
        $this->conexion();
        $consulta = $this->conexion->query("SELECT user_name 
                                            FROM usuario 
                                            WHERE user_name = '$usuario' AND clave = '$clave'");
        $usuario = $consulta->fetch_assoc();
        mysqli_close($this->conexion);

        return $usuario;
    }
}
