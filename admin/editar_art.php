<?php
session_start();
require_once '../config/conection.php';

$database = new Database();
$pdo = $database->conectar();

if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit;
}

// Obtener el ID del producto a editar
$id = $_GET['id'];

// Obtener los datos del producto de la base de datos
$stmt = $pdo->prepare("SELECT * FROM arts WHERE id = :id"); // Reemplaza 'tu_tabla' con el nombre de tu tabla
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$producto = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        // Actualizar los datos del producto en la base de datos
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $stmt = $pdo->prepare("UPDATE arts SET nombre = :nombre, precio = :precio, descripcion = :descripcion WHERE id = :id");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: administrar.php?status=modified');
            exit;
        } else {
            $error = "Error al actualizar el producto.";
        }
    } elseif (isset($_POST['delete'])) {

        $stmt = $pdo->prepare("SELECT imagen FROM arts WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $producto = $stmt->fetch();

        if ($producto) {
            $rutaImagen = $producto['imagen'];
            //Eliminamos el producto de la DB
            $stmt = $pdo->prepare("DELETE FROM arts WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                if (file_exists($rutaImagen)) {
                    unlink($rutaImagen);
                }
                header('Location: administrar.php?status=deleted');
                exit;
            } else {
                $error = "Error al eliminar el producto.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style = "background: url(../login/waves.png); background-size: cover; background-repeat: no-repeat; background-position: 0px;">
    <div class="container d-flex flex-column justify-content-center mt-3" style="height: 900px;">
        <div class="row row-cols-1 justify-content-center">
            <div class="col-10 col-md-6 shadow">
                <h2 class="text-center">Editar Producto</h2>
                <?php if (isset($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <form action="editar_art.php?id=<?php echo $producto['id']; ?>" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" class="form-control" value="<?php echo htmlspecialchars($producto['precio']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" required><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <button type="submit" name="update" class="btn btn-primary ">Actualizar</button>
                        <button type="submit" name="delete" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
                <a href="administrar.php" class="btn btn-secondary btn-block mb-3">Cancelar</a>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>