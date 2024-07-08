<?php

require '../config/conection.php';
$db = new Database();

$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre , precio , descripcion, imagen FROM arts");
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Articulos</title>
</head>

<body style = "background: url(../img/double-bubble-outline.png); background-repeat: repeat;">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/login.php"> <i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Mostramos todos los resultados en la base de datos -->
            <?php foreach ($resultado as $row) { ?>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo $row['imagen']; ?>" class="card-img-top w-25">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row["nombre"]; ?> </h5>
                            <h6 class="card-subtitle"> Precio: $<?php echo $row["precio"] ?></h6>
                            <p class="card-text"> Descripcion: <?php echo $row["descripcion"] ?> </p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>