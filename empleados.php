<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 1234567, "nombre" => "David Garcia", "bruto" => 1200000);
$aEmpleados[] = array("dni" => 7838576, "nombre" => "Yeison Arismendy", "bruto" => 900000);
$aEmpleados[] = array("dni" => 2982142, "nombre" => "Leonel Messi", "bruto" => 2000000);
$aEmpleados[] = array("dni" => 2135421, "nombre" => "Neymar", "bruto" => 30000000);

function calcularNeto($bruto) {
    return $bruto - ($bruto * 0.17);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aEmpleados as $empleado) { ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                                <td><?php echo number_format(calcularNeto($empleado["bruto"]), 2, ",", ".");?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>
    </main>
</body>

</html>