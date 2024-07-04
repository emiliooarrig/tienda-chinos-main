<?php
session_start();
require_once 'conection.php';

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

    // Verificar la contraseña cifrada
    if ($user && password_verify($password, $user['pass'])) {
        // Inicio de sesión exitoso
        $_SESSION['username'] = $username;
        header('Location: ../admin/administrar.php?success=usuario-encontrado');
        exit;
    } else {
        // Error en el inicio de sesión
        header('Location: ../login/login.php?status=error');
        exit;
    }
}
?>


