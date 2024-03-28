<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion de la funcion
function contar($aArray) {
    $contador = 0;
    foreach($aArray as $item){
        $contador++;
    }
    return $contador;
}

//uso
$aNotas = array(9, 8, 9, 50, 4, 7, 8);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Felipe Agudelo",
    "edad" => 19,
    "peso" => 70,
);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan Rico",
    "edad" => 20,
    "peso" => 75,
);

$aPacientes[] = array(
    "dni" => "56.798.345",
    "nombre" => "Yeison Garcia",
    "edad" => 21,
    "peso" => 60,
);

$aPacientes[] = array(
    "dni" => "45.675.823",
    "nombre" => "Jose Zuluaga",
    "edad" => 19,
    "peso" => 65,
);

$aPacientes[] = array(
    "dni" => "10.764.927",
    "nombre" => "Abraham Cardenas",
    "edad" => 20,
    "peso" => 67,
);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart tv 55\" 4k UHD",
    "marca" => "hitachi",
    "modelo" => "hjhkh66",
    "stock" => 60,
    "precio" => 1000000,
);

$aProductos[] = array(
    "nombre" => "Iphone",
    "marca" => "Aple",
    "modelo" => "14 pro max",
    "stock" => 5,
    "precio" => 5000000,
);

$aProductos[] = array(
    "nombre" => "MacBook",
    "marca" => "Aple",
    "modelo" => "pro",
    "stock" => 0,
    "precio" => 4000000,
);

echo "<br>Cantidad de productos: " . contar($aProductos);
echo "<br>Cantidad de pacientes: " . contar($aPacientes);
echo "<br>Cantidad de notas: " . contar($aNotas);
?>