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
            <a class="navbar-brand" href="index.php"> Tienda </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articulos/articulos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid d-flex flex-column align-items-center justify-content-center portada">
        <h1> TIENDA XXXXXXX</h1>
        <h3> Productos de calidad </h3>
    </div>

    <div class="container-fluid d-flex justify-content-around align-items-center flex-column beneficios">
        <h1> Sobre la tienda: </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
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

    <div class="container compra d-flex flex-row align-items-center justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/apreton-de-manos.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/calidad.png" class="d-block w-50" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col">
                <h1> ¡Compra ahora!</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo similique eaque hic dolorum blanditiis in voluptate natus nisi sequi ipsa molestiae dignissimos veniam,
                    temporibus pariatur perferendis quia commodi esse excepturi.
                </p>
                <a href="articulos/articulos.php" class="btn btn-primary"> COMPRA</a>
            </div>
        </div>
    </div>

    <footer class="container-fluid d-flex align-items-center justify-content-center text-center bg-light" style="height: 100px;">
        <p class="fw-bolder">
            Tienda XXXXXXX. Todos los derechos reservados
        </p>
    </footer>

    <style>
        @media screen and (max-width: 400px) {

            .beneficios {
                height: fit-content;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>