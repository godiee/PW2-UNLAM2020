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
            //MODIFICA POKEMON
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
                echo "<form action='recursos/funcionalidades/abmPokemon.php' method='POST' class='w3-container'>
                      <input type='hidden' value='modificar' name='accion'>
                      <input type='hidden' value='$id' name='id_original'>
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
                      <br>
                      <input type='submit' value='Modificar' class='w3-button w3-red'>
                      </form>";
                break;
            //INSERTAR POKEMON
            case 2:
                if (is_null($_SESSION["usuario"])){
                    echo "<h1>Acceso restringido.</h1>";
                    break;
                }

                echo "<h1>Nuevo Pokemon</h1>";
                echo "<form action='recursos/funcionalidades/abmPokemon.php' method='POST' class='w3-container'>
                      <input type='hidden' value='insertar' name='accion'>
                      <p>
                      <label>Numero
                      <input class='w3-input' type='number' name='numero' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Nombre
                      <input class='w3-input' type='text' name='nombre' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Imagen
                      <input class='w3-input' type='text' name='imagen' required>
                      </label>
                      </p>
                      
                      <p>
                      <label>Imagen Interna
                      <input class='w3-input' type='text' name='imagenInterno' required>
                      </label>
                      </p>
                      
                      <p>Tipo</p>
                      <select class='w3-select' name='tipo' required>
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
                      <textarea name='descripcion' rows='4' cols='50' maxlength='400' required></textarea>
                      <br>
                      <input type='submit' value='Insertar' class='w3-button w3-red'>
                      </form>";
                break;
            //ELIMINAR POKEMON
            case 3:
                $nombre = $pokemon[0]['nombre'];
                $id = $pokemon[0]["idPokemon"];
                if (is_null($_SESSION["usuario"])){
                    echo "<h1>Acceso restringido.</h1>";
                    break;
                }
                echo "<p>Estas seguro de eliminar al siguiente pokemon: $nombre?</p>";
                echo "<form action='recursos/funcionalidades/abmPokemon.php' method='POST' class='w3-container'>
                        <input type='hidden' value='eliminar' name='accion'>
                        <input type='hidden' value='$id' name='id'>
                        <input class='w3-radio' type='radio' name='delete' value='true' checked>
                        <label>Si</label>
                        <input class='w3-radio' type='radio' name='delete' value='false'>
                        <label>No</label>
                        <br><br>
                        <input type='submit' value='Enviar' class='w3-button w3-red'>
                      </form>";
                break;
            //MUESTRA POKEMONS
            default:
                if (isset($_SESSION["abm"])){
                    echo $_SESSION["abm"];
                    unset($_SESSION["abm"]);
                }
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
                //LLEVA A INSERTAR POKEMON
                if (!is_null($_SESSION["usuario"])){
                    echo '<a href="index.php?accion=2" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Nuevo Pokemon</a>';
                }
                break;
        }
        ?>
</div>

<?php require_once ("recursos/html/footer.php")?>