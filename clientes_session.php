<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION["listadoClientes"])) {
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

if ($_POST) {

    //Si hace click en enviar
    if (isset($_POST["btnEnviar"])) {
        //Asignamos en una variable los datos que vienen del formulario 
        $nombre = $_POST["txtNombre"];
        $cedula = $_POST["txtCedula"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];

        //Creamos el array que contendra el listado de clientes
        $aClientes[] = array(
            "nombre" => $nombre,
            "cedula" => $cedula,
            "telefono" => $telefono,
            "edad" => $edad
        );
        //Actualiza el contenido de la variable de session
        $_SESSION["listadoClientes"] = $aClientes;
    }
    //Si hace click en eliminar
    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array();
    }
}

if (isset($_GET["pos"])) {
    $pos = $_GET["pos"]; //Recupero el dato que viene desde la query string via get
    unset($aClientes[$pos]); //Elimina la posicion del array indicada
    //Actualiza la variable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("location: clientes_session.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="POST" class="form">

                    <label for="">Nombre:</label>
                    <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control my-2">

                    <label for="">Cedula:</label>
                    <input type="text" id="txtCedula" name="txtCedula" placeholder="Cedula" class="form-control my-2">

                    <label for="">Telefono</label>
                    <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Telefono" class="form-control my-2">

                    <label for="">Edad</label>
                    <input type="text" id="txtEdad" name="txtEdad" placeholder="Edad" class="form-control my-2">

                    <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                    <button type="submit" name="btnEliminar" class="btn bg-danger text-white">Eliminar</button>

                </form>
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover shadow border">
                    <thead>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["cedula"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>
</body>

</html>