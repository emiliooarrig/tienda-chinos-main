<?php
session_start();
require '../config/conection.php';
$database = new Database();
$pdo = $database->conectar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparar y ejecutar la consulta
    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    // Verificar la contraseña
    if ($user && password_verify($password, $user['pass'])) {
        // Inicio de sesión exitoso
        $_SESSION['user'] = $user['usuario'];
        header('Location: ../admin/administrar.php');
        exit;
    } else {
        // Error en el inicio de sesión
        $error = "Usuario o contraseña incorrectos.";
        header('Location: ../login/login.php?error=' . urlencode($error));
        exit;
    }
}
