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
            echo "<form action='recursos/funcionalidades/procesarUsuario.php' class='w3-bar-item' method='post'>
                    <label for='user'>Usuario:
                    <input type='text' name='usuario'>
                    </label>
                    <label for='pass'>Contraseña:
                    <input type='password' name='clave'>
                    </label>
                    <input type='submit' value='Log in'>
                  </form>";
        }else{
            echo "<a href='recursos/funcionalidades/procesarUsuario.php?logout=1' class='w3-bar-item w3-button w3-padding-large w3-white w3-right'>". $_SESSION["usuario"]."</a>";
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
    <form action="recursos/funcionalidades/buscarPokemon.php" method="post">
        <input type="text" name="pokemonABuscar" placeholder="Ingrese número o nombre de pokemon" class="w3-input">
        <input type="submit" value="Quien es este pokemon?" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">
    </form>
</header>
