<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 21;
$precioSinIva = 0;
$precioConIva = 0;
$ivaCantidad = 0;

if ($_POST) {
    $iva = $_POST["lstIva"];
    $precioSinIva = ($_POST["txtPrecioSinIva"]) > 0 ? $_POST["txtPrecioSinIva"] : 0;
    $precioConIva = ($_POST["txtPrecioConIva"]) > 0 ? $_POST["txtPrecioConIva"] : 0;

    if ($precioSinIva > 0) {
        $precioConIva = $precioSinIva * ($iva / 100 + 1);
    }

    if ($precioConIva > 0) {
        $precioSinIva = $precioConIva / ($iva / 100 + 1);
    }

    $ivaCantidad = $precioConIva - $precioSinIva;
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de iva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form method="POST">
                    <div class="pb-3">
                        <label for="">IVA:</label>
                        <select name="lstIva" id="lstIva" class="form-control">
                            <option value="10.5">10.5</option>
                            <option value="19" selected>19</option>
                            <option value="21">21</option>
                            <option value="27">27</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA:</label>
                        <input type="text" id="txtPrecioSinIva" name="txtPrecioSinIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con IVA:</label>
                        <input type="text" id="txtPrecioConIva" name="txtPrecioConIva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-5 pt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td><?php echo number_format($precioSinIva, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td><?php echo number_format($precioConIva, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td><?php echo number_format($ivaCantidad, 2, ",", "."); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>