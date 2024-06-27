<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login/login.php');
    exit;
}

require '../config/conection.php';
$db = new Database();

$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre , precio , descripcion FROM arts");
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


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
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Bienvenido</h2>
                <a href="agregar/agregar_prod.php" class="btn btn-primary btn-block"> Agregar producto </a>
            </div>
        </div>
    </div>

    <div class="container">
        <h1> Productos publicados: </h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Mostramos todos los resultados en la base de datos -->
            <?php foreach ($resultado as $row) { ?>
                <div class="col" style="margin-top: 10px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row["nombre"]; ?> </h5>
                            <h6 class="card-subtitle"> Precio: $<?php echo $row["precio"] ?></h6>
                            <p class="card-text"> Descripcion: <?php echo $row["descripcion"] ?> </p>
                            <a href="editar_art.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-3">
        <a href="../config/logout.php" class="btn btn-danger ">Cerrar sesión</a>
    </div>

</body>

</html>