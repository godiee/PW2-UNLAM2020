<?php
$dirCarpetaImagenes = opendir("imagenes");
while (false !== ($imagen = readdir($dirCarpetaImagenes))){
    if ($imagen != "." && $imagen != ".." && $imagen != "dado"){
        echo "<a href='Ejercicio2/mostrarImagen.php?url=../imagenes/$imagen'>$imagen</a>" . "<br>";
    }
}
closedir();
