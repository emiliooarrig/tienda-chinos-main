<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Inicio</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg p-4 p-sm-4" style="height: 100%; background-color: #2E5266;">
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
                        <a class="nav-link" href="contacto/contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login/login.php"> <i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <style>
        .portada {
            height: 600px;
            background: url(img/img-index-2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .beneficios {
            background-color: #f1f1f1;
            height: fit-content;
        }

        .nav-item{
            opacity: 1;
            border-bottom: 2px solid transparent;
            transition: .3s all;
        }

        .nav-item:hover{
            border-bottom: 2px solid #E2C044;
        }
        
        .nav-link{
            color: #fff;
        }
        .nav-link:hover{
            color: #E2C044;
        }

        .btn-compra{
            background-color:#E2C044;
            color: #fff;
            transition: .3s all;
        }

        .btn-compra:hover{
            background-color: #D3A500;
        }
        @media (max-width: 575px) {
            .portada {
                background-position-x: -150px;
            }
        }

    </style>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center portada">
        <h1> TIENDA XXXXXXX</h1>
        <h3> Productos de calidad </h3>
    </div>


    <div class="container compra d-flex flex-row align-items-center justify-content-center mt-3 mb-3 p-3 p-sm-5">
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col text-center">
                <img src="img/fondo-index.jpg" alt="" class="img w-100">
            </div>

            <div class="col">
                <h1 class="text-dark"> ¡Compra ahora!</h1>
                <p class="fs-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo similique eaque hic dolorum blanditiis in voluptate natus nisi sequi ipsa molestiae dignissimos veniam,
                    temporibus pariatur perferendis quia commodi esse excepturi.
                </p>
                <a href="articulos/articulos.php" class="btn btn-compra p-2 p-sm-3"> COMPRA</a>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-around align-items-center flex-column mt-3 mb-3 p-3 p-sm-5 beneficios">
        <h1> Nuestras ventajas: </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam cumque ipsa fugit tempora debitis similique optio illum a
        </p>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/apreton-de-manos.png" alt="" class="w-25">
                <h1 class="fw-light"> Confiables </h1>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/calidad.png" alt="" class="w-25">
                <h1 class="fw-light"> Calidad </h1>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center text-center">
                <img src="img/entrega-de-paquetes.png" alt="" class="w-25">
                <h1 class="fw-light"> Entrega rápida </h1>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-column justify-content-center" style="height: 300px;">
        <div class="row">
            <div class="col text-center">
                <h1> Contactanos </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error adipisci harum quod aspernatur repudiandae iusto natus similique,
                </p>

                <a href="contacto/contacto.php" class="btn btn-compra p-3 p-sm-4"> Contacto </a>
            </div>
        </div>
    </div>

    <footer class="container-fluid d-flex align-items-center justify-content-center text-light mt-3" style="height: 100px; background-color: #2E5266;">
        <p class="fw-bolder fs-6">
            Tienda XXXXXXX. Todos los derechos reservados
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>