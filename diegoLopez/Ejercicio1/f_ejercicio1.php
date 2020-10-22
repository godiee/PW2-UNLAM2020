<?php
function validarNombreDeImagen($nombreDeImagen)
{
    if (!isset($nombreDeImagen) && $nombreDeImagen == "") {
        $nombreDeImagen = "Error";
    }
    return $nombreDeImagen;
}

function moverImagen($nombreDeImagen)
{
    $_FILES["file"]["name"] = $nombreDeImagen;
    $ruta = "../imagenes/" . $_FILES["file"]["name"];
    if (file_exists($ruta)) {
        $resultado = "Error";
    } else {
        move_uploaded_file($_FILES["file"]["tmp_name"], $ruta);
        $resultado = "Operacion finalizada";
    }
    return $resultado;
}

function verificarArchivo(){
    $error = "";
    if (($_FILES["file"]["error"] > 0) || ($_FILES["file"]["type"] != "image/jpeg")) {
        $error = "Error";
    }

    return $error;
}
