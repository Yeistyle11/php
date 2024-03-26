<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Listado de numeros consecutivos de 1 al 100

/*for ($i = 1; $i <= 100; $i++)
    echo $i."\n"
?>
*/

// listado numeros mostrando solo los numeros pares

/*for ($i = 2; $i <= 100; $i+=2)
    echo $i."\n"
?>
*/

//listado numeros cortando en el 60

for ($i = 1; $i <= 100 && $i != 60; $i++)
    echo $i."\n"
?>