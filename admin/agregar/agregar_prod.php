<?php
session_start();
require '../../config/conection.php';

$database = new Database();
$pdo = $database->conectar();

if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];   

    // Insertar el nuevo producto en la base de datos
    $stmt = $pdo->prepare("INSERT INTO arts (nombre, precio, descripcion) VALUES (:nombre, :precio, :descripcion)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':descripcion', $descripcion);

    if ($stmt->execute()) {
        header('Location: ../administrar.php?status=success');
        exit;
    } else {
        $error = "Error al agregar el producto.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar producto </title>
</head>

<body>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Editar Producto</h2>
                <?php if (isset($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <form action="agregar_prod.php" method="post">
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
                    <div class="form-group d-flex justify-content-around">
                        <button type="submit" name="update" class="btn btn-primary btn-block"> Publicar </button>
                    </div>
                </form>
                <a href="../administrar.php" class="btn btn-secondary btn-block">Cancelar</a>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>