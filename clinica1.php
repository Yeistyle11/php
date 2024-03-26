<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Creamos el array
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


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombres y apellidos</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($aPacientes); $i++) { ?>
                        <tr>
                            <td><?php echo $aPacientes[$i]["dni"]; ?></td>
                            <td><?php echo $aPacientes[$i]["nombre"]; ?></td>
                            <td><?php echo $aPacientes[$i]["edad"]; ?></td>
                            <td><?php echo $aPacientes[$i]["peso"]; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>