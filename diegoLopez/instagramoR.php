<?php include("header.php");
include ("Ejercicio2/mostrarLinks.php")?>
    <form class="w3-container" action="Ejercicio2/ejercicio2.php" method="post"
          enctype="multipart/form-data">
        <p>Nombre de imagen</p>
        <input class="w3-input w3-border w3-border-black" type="text" name="nombreDeImagen" required>
        <input class="w3-padding" type="file" name="file">
        <input class="w3-btn w3-blue-grey" type="submit" value="Enviar">
    </form>
<?php include("footer.php"); ?>