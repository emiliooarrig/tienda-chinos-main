<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login/login.php');
    exit;
}

require '../config/conection.php';
$db = new Database();
$con = $db->conectar();
$sql->execute();

if (!isset($_SESSION['user'])) {
    header('Location: ../login/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agregar administrador </title>
</head>

<body>


    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center"> Agregar administrador </h2>
                <?php if (isset($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <form action="agregar_admin.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="password"> Contraseña </label>
                        <input type="password" name ="contrasena"placeholder="Tu contraseña" required>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <button type="submit" name="update" class="btn btn-primary btn-block"> Registrar </button>
                    </div>
                </form>
                <a href="../administrar.php" class="btn btn-secondary btn-block">Cancelar</a>
            </div>
        </div>
    </div>



</body>

</html>