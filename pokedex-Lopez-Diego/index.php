<?php
include_once("recursos/funcionalidades/BaseDeDatos.php");
include_once("recursos/funcionalidades/f_mostrarTabla.php");
session_start();
$consultas = new BaseDeDatos();
$pokemon = is_null($_SESSION["pokemon"]) ? $pokemon = $consultas->dameTodosLosPokemons() : $_SESSION["pokemon"];
if ($_SESSION["error"]) echo "<script>alert('Pokemon no encontrado');</script>";
unset($_SESSION["error"]);
unset($_SESSION["pokemon"]);
if ($_SESSION["usuario"] == "Error"){
    echo "<script>alert('Usuario y/o contraseña invalidos.');</script>";
    unset($_SESSION["usuario"]);
}
?>

<?php require_once ("recursos/html/header.php")?>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <?php
        switch ($_GET["accion"]){
            case 1:
                if (is_null($_SESSION["usuario"])){
                    echo "<h1>Acceso restringido.</h1>";
                    break;
                }
                $id = $pokemon[0]["idPokemon"];
                $nombre = $pokemon[0]["nombre"];
                $imagen = $pokemon[0]["gif"];
                $imagenInterna = $pokemon[0]["imagen"];
                $tipo = $pokemon[0]["tipo"];
                $descripcion = $pokemon[0]["descripcion"];

                echo "<h1>Modificar Pokemon</h1>";
                echo "<form class='w3-container'>
                      
                      <p>
                      <label>Numero
                      <input class='w3-input' type='number' name='numero' value='$id' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Nombre
                      <input class='w3-input' type='text' name='nombre' value='$nombre' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Imagen
                      <input class='w3-input' type='text' name='imagen' value='$imagen' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Imagen Interna
                      <input class='w3-input' type='text' name='imagenInterno' value='$imagenInterna' required>
                      </label>
                      </p>
                      
                      <p>Tipo</p>
                      <select class='w3-select' name='tipo' required>
                        <option value='$tipo'>Sin cambios</option>
                        <option value='recursos/img/acero.gif'>Acero</option>
                        <option value='recursos/img/agua.gif'>Agua</option>
                        <option value='recursos/img/bicho.gif'>Bicho</option>
                        <option value='recursos/img/dragon.gif'>Dragon</option>
                        <option value='recursos/img/electrico.gif'>Electrico</option>
                        <option value='recursos/img/fantasma.gif'>Fantasma</option>
                        <option value='recursos/img/fuego.gif'>Fuego</option>
                        <option value='recursos/img/hada.gif'>Hada</option>
                        <option value='recursos/img/hielo.gif'>Hielo</option>
                        <option value='recursos/img/lucha.gif'>Lucha</option>
                        <option value='recursos/img/normal.gif'>Normal</option>
                        <option value='recursos/img/planta.gif'>Planta</option>
                        <option value='recursos/img/psy.gif'>Psiquico</option>
                        <option value='recursos/img/roca.gif'>Roca</option>
                        <option value='recursos/img/tierra.gif'>Tierra</option>
                        <option value='recursos/img/veneno.gif'>Veneno</option>
                        <option value='recursos/img/volador.gif'>Volador</option>
                      </select>
                      
                      <p>Descripcion</p>
                      <textarea name='descripcion' rows='4' cols='50' maxlength='400' required>$descripcion</textarea>
                      </form>";
                break;

            default:
                $tabla = "<h1>Pokemons</h1>
                          <table class='w3-table-all'>
                            <tr>
                                <th>Nro</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Tipo</th>";
                $tabla .= $_SESSION["usuario"] ? "<th>Acciones</th> </tr>" : "</tr>";
                echo $tabla;
                mostrarPokemons($pokemon);
                echo "</table>";
                break;
        }


        ?>
</div>

<?php require_once ("recursos/html/footer.php")?>