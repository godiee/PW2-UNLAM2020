<?php
require("f_ejercicio1.php");

$nombreDeImagen = validarNombreDeImagen($_POST["nombreDeImagen"]);

if ($nombreDeImagen == "Error"){
    exit("Nombre de imagen no valido asegurese de poner un nombre valido");
}

if(verificarArchivo() == "Error"){
    exit("El archivo se encuentra dañado o no es una imagen");
}

if(moverImagen($nombreDeImagen) == "Error"){
    exit("Esta imagen ya se encuentra cargada o su nombre ya ha sido utilizado");
}

header("Location: ../instagramo.php");
exit();