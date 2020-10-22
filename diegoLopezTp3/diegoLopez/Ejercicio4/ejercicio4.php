<?php

function incrementar(&$valor){
    return is_string($valor) ? $error = "No es un valor numerico" : ++$valor;
}
