<?php
$dirCarpetaImagenes = opendir("imagenes");
while (false !== ($imagen = readdir($dirCarpetaImagenes))){
    if ($imagen != "." && $imagen != ".." && $imagen != "dado"){
        echo "<img class='w3-image' src='imagenes/$imagen' alt='foto' width='200'>" . "<br>" .$imagen . "<br>";
    }
}
closedir();
