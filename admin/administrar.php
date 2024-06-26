<?php
session_start();

// Verificar si el usuario ha iniciado sesión
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
    <title>Página protegida</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
                <p class="text-center">Esta es una página protegida.</p>
                <a href="../config/logout.php" class="btn btn-danger btn-block">Cerrar sesión</a>
            </div>
        </div>
    </div>
</body>

</html>