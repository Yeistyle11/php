<?php
//Muestra los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row col-6">
            <form action="" method="POST">
                <div class="pb-3">
                    <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" class="form-control">
                </div>
                <div class="pb-3">
                    <input type="password" name="txtClave" id="txtClave" placeholder="Clave" class="form-control">
                </div>
                <div class="pb-3">
                    <button type="submit" id="btnIngresar" name="btnIngresar" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>