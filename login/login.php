<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background: url(waves.png); background-size: cover; background-repeat: no-repeat; background-position: 0px;">


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
                        <a class="nav-link" href="../contacto/contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"> <i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container d-flex align-items-center justify-content-center" style="height: 900px;">
        <div class="row row-cols-1">
            <div class="col d-flex flex-column justify-content-center align-items-center shadow bg-light bg-gradient">
                <img src="usuario.png" alt="" class="w-25 mt-3">
                <h2 class="text-center">Login</h2>

                <form action="../config/validar.php" method="post" autocomplete="off">
                    <label class="form-label" for="username"> User </label>
                    <div class="input-group mb-3">
                        <i class="bi bi-person-circle input-group-text"></i>
                        <input type="text" name="username" class="form-control" placeholder="ej. admin " required>
                    </div>

                    <label class="form-label" for="password"> Contraseña </label>
                    <div class="input-group mb-3">
                        <i class="bi bi-lock input-group-text"></i>
                        <input type="password" name="password" id="password" class="form-control" placeholder="ej. 1234" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>

                    <button name="btningresar" type="submit" class="btn btn-primary btn-block mb-3">Login</button>
                    <!-- Mensaje de error -->
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'error') { ?>
                        <div class="container mt-3 alert alert-danger" role="alert">
                            Usuario o contraseña incorrectos.
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const password = document.getElementById('password');
            const icon = document.getElementById('togglePasswordIcon');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>

</body>

</html>