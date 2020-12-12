<?php
include_once ("BaseDeDatos.php");
include_once ("f_mostrarTabla.php");
session_start();
$consultas = new BaseDeDatos();
$pokemon = is_null($_SESSION["pokemon"]) ? $pokemon = $consultas->dameTodosLosPokemons() : $_SESSION["pokemon"];
if ($_SESSION["error"]) echo "<script>alert('Pokemon no encontrado');</script>";
unset($_SESSION["error"]);
if ($_SESSION["usuario"] == "Error"){
    echo "<script>alert('Usuario y/o contraseña invalidos.');</script>";
    unset($_SESSION["usuario"]);
}
?>

<!DOCTYPE html>
<html lang="es">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
        <?php
        if (is_null($_SESSION["usuario"])){
            echo "<form action='procesarUsuario.php' class='w3-bar-item' method='post'>
                    <label for='user'>Usuario:
                    <input type='text' name='usuario'>
                    </label>
                    <label for='pass'>Contraseña:
                    <input type='password' name='clave'>
                    </label>
                    <input type='submit' value='Log in'>
                  </form>";
        }else{
            echo "<a href='procesarUsuario.php?logout=1' class='w3-bar-item w3-button w3-padding-large w3-white w3-right'>". $_SESSION["usuario"]."</a>";
        }

        ?>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">POKEDEX</h1>
    <form action="buscarPokemon.php" method="post">
        <input type="text" name="pokemonABuscar" placeholder="Ingrese número o nombre de pokemon" class="w3-input">
        <input type="submit" value="Quien es este pokemon?" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">
    </form>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">

            <h1>Pokemons</h1>
        <table class="w3-table-all">
            <tr>
                <th>Nro</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <?php if ($_SESSION["usuario"]) echo "<th>Acciones</th>"?>
            </tr>
            <?php mostrarPokemons($pokemon);?>
        </table>

    </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>