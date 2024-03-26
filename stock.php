<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//ejercicio condicional
$stock=800;

if ($stock >0) {
    echo "Hay stock";
}else {
    echo "No hay stock";
}

?>