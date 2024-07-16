<?php
session_start();
require '../config/conection.php';

$database = new Database();
$pdo = $database->conectar();

if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Manejar la carga de la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $imagen = $_FILES['imagen'];
        $rutaImagen = '../uploads/' . basename($imagen['name']);

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($imagen['tmp_name'], $rutaImagen)) {
            // Conexión a la base de datos
            $database = new Database();
            $pdo = $database->conectar();

            // Insertar el producto en la base de datos
            $stmt = $pdo->prepare("INSERT INTO arts (nombre, descripcion, precio, imagen) VALUES (:nombre, :descripcion, :precio, :imagen)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':imagen', $rutaImagen);

            if ($stmt->execute()) {
                header('Location: ../administrar.php?status=success');
            } else {
                echo '<div class="alert alert-danger" role="alert">Error al agregar el producto.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Error al subir la imagen.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Por favor, selecciona una imagen.</div>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Agregar producto </title>
</head>

<body style = "background: url(../login/waves.png); background-size: cover; background-repeat: no-repeat; background-position: 0px;">

    <div class="container d-flex flex-column justify-content-center mt-4" style = "height: 900px;">
        <div class="row row-cols-1 justify-content-center">
            <div class="col-10 col-md-6 shadow">
                <h2 class="text-center">Agregar producto</h2>
                <?php if (isset($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <form action="agregar_prod.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="imagen">Imagen del Producto</label>
                        <input type="file" name="imagen" class="form-control" required>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <button type="submit" name="update" class="btn btn-primary btn-block"> <i class="bi bi-cloud-plus-fill"></i> Publicar </button>
                    </div>
                </form>
                <a href="administrar.php" class="btn btn-secondary btn-block mb-3">Cancelar</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>