<?php
ini_set('display_errors', 1);
ini_set('display_starup_errors', 1);
error_reporting(E_ALL);

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
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
    
                        <?php
                        $Contador = 0;
                        do { ?> 

                            <tr>
                                <td><?php echo $aProductos[$Contador]["nombre"]; ?></td>
                                <td><?php echo $aProductos[$Contador]["marca"]; ?></td>
                                <td><?php echo $aProductos[$Contador]["modelo"]; ?></td>
                                <td><?php echo $aProductos[$Contador]["stock"] > 10 ? "Hay Stock" : ($aProductos[$Contador]["stock"] > 0 && $aProductos[$Contador]["stock"] <= 10 ? "Poco Stock" : "No hay Stock"); ?></td>
                                <td><?php echo $aProductos[$Contador]["precio"]; ?></td>
                                <td><button class="btn btn-primary">Comprar</button>
                            </tr>
                        <?php
                            $Contador++;
                        } while ($Contador<3); ?>

                    </tbody>

                </table>>
            </div>
        </div>
    </main>
</body>

</html>