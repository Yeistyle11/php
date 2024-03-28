<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Ejercicio con funciones del area de un triangulo

function calcularAreaReact($base, $altura) {
    $resultado =  $base * $altura;
    return $resultado;
}
//uso
echo "El area es " . calcularAreaReact(100, 0.60). "<br>";
echo "El area es " . calcularAreaReact(800, 300);

?>