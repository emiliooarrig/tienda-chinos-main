<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Contacto</title>
</head>

<body style="background: url(../img/double-bubble-outline.png);">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> Tienda </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../articulos/articulos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/login.php"> <i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid mb-3 text-center text-light p-5" style="background-color: #343A40;">
        <h1 class = "fw-bolder"> ¿Como contactarnos? </h1>
    </div>

    <div class="container d-flex flex-column justify-content-around">

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3 bg-light shadow">
            <div class="col d-flex justify-content-center">
                <img src="contacto-img.png" alt="" class="w-50">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h1> Whatsapp</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ab dolores nisi perspiciatis ea. Error maxime voluptate eos, vitae similique enim laudantium eligendi, magnam sint a qui corrupti quaerat harum porro.
                </p>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3 bg-light shadow">
            <div class="col d-flex flex-column justify-content-center">
                <h1> Correo electrónico </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nihil quaerat nesciunt quos?
                    Explicabo rerum, voluptatem libero eaque quo autem quidem vitae mollitia commodi a quis ab aut inventore omnis.
                </p>
            </div>

            <div class="col d-flex flex-column align-items-center">
                <img src="../img/correo-electronico.png" alt="" class="w-50">
            </div>
        </div>
    </div>


    <footer class="container-fluid d-flex align-items-center justify-content-center text-light mt-3" style="height: 100px; background-color: #343A40;">
        <p class="fw-bolder">
            Tienda XXXXXXX. Todos los derechos reservados
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>