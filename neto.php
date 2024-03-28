<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ejercicio con funciones para calcular el salario neto
function calcularNeto($bruto) {
    return $bruto-($bruto * 0.17);
}

//uso
echo "el sueldo neto es $" . calcularNeto(80000);
?>