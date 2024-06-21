<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container d-flex flex-column align-items-center justify-content-center portada">
        <h1> TIENDA XXXXXXX</h1>
        <h3> Productos de calidad </h3>
    </div>

    <div class="container-fluid beneficios">
        <h1> Sobre la tienda: </h1>
        <div class="row justify-content-center">
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/apreton-de-manos.png" alt="" class="w-25">
                <h1> Confiables </h1>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/calidad.png" alt="" class="w-25">
                <h1> Calidad </h1>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/entrega-de-paquetes.png" alt="" class="w-25">
                <h1> Entrega rapida </h1>
            </div>
        </div>
    </div>

    <div class="container compra d-flex flex-column align-items-center justify-content-center">
        <h1> Compra ahora!</h1>
        <a href="" class="btn btn-primary"> COMPRA</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>