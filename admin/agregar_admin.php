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
    <title> Agregar administrador </title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Registrar Usuario</h2>
                <?php if (!empty($error)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>';
                } ?>
                <?php if (!empty($success)) {
                    echo '<div class="alert alert-success">' . htmlspecialchars($success) . '</div>';
                } ?>
                <form action="agregar_admin.php" method="post">
                    <div class="form-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>