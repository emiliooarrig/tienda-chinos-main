<?php
session_start();
if (!isset($_SESSION['username'])) {
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
    <title> Administrador de artículos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Bienvenido</h2>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-6 text-center mb-md-0 mt-3">
                <a href="agregar/agregar_prod.php" class="btn btn-primary"> Agregar producto </a>
            </div>
        
            <div class="col-md-6 text-center mt-3">                
                <a href="agregar_admin.php" class="btn btn-secondary"> Agregar administrador </a>
            </div>
        </div>
    </div>

    <div class="container">
        <h1> Productos publicados: </h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Mostramos todos los resultados en la base de datos -->
            <?php foreach ($resultado as $row) { ?>
                <div class="col mt-3">
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
        <a href="../config/logout.php" class="btn btn-danger mb-3">Cerrar sesión</a>
    </div>

    <div class="toast-container">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success">
                <strong class="mr-auto">Éxito</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Producto agregado correctamente.
            </div>
        </div>
    </div>

    <div class="toast-container">
        <div id="deletedToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger">
                <strong class="mr-auto">Éxito</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Producto eliminado correctamente.
            </div>
        </div>
    </div>


    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
        $('#successToast').toast({ delay: 3000 });
        $('#successToast').toast('show');
        <?php } elseif (isset($_GET['status']) && $_GET['status'] == 'deleted') { ?>
        $('#deletedToast').toast({ delay: 3000 });
        $('#deletedToast').toast('show');
        <?php } ?>
    });
</script>
</body>

</html>