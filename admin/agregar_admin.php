<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit;
}

require '../config/conection.php';

$database = new Database();
$pdo = $database->conectar();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar si el usuario ya existe
    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $error = "El nombre de usuario ya está en uso.";
    } else {
        // Cifrar la contraseña
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insertar el nuevo usuario en la base de datos
        $stmt = $pdo->prepare("INSERT INTO users (usuario, pass) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            $success = "Usuario registrado correctamente.";
        } else {
            $error = "Error al registrar el usuario.";
        }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Agregar administrador </title>
</head>

<body style = "background: url(../login/waves.png); background-size: cover; background-repeat: no-repeat; background-position: 0px;">

    <div class="container d-flex flex-column justify-content-center mt-4" style="height: 900px;">
        <div class="row row-cols-1 justify-content-center">
            <div class="col-10 col-md-6 shadow">
                <h2 class="text-center mt-3">Registrar Usuario</h2>
                <?php if (!empty($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <?php if (!empty($success)) {
                    echo '<div class="alert alert-success">' . htmlspecialchars($success) . '</div>';
                } ?>
                <form action="agregar_admin.php" method="post">
                    <label for="username">Nombre de Usuario</label>
                    <div class="input-group">
                        <i class="bi bi-person-circle input-group-text"></i>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <label for="password">Contraseña</label>
                    <div class="input-group mb-3">
                        <i class="bi bi-key-fill input-group-text"></i>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> <i class="bi bi-cloud-plus-fill"></i> Registrar</button>
                    <a href="administrar.php" class="btn btn-secondary btn-block mb-3">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>