<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .container-lg {
            background-color: #ebebeb;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body class="antialiased" background="{!! asset('imagenes/fondo.jpg') !!}">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RabbitBoys</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fabiola
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <div class="container-lg" id="content">

        <center>
            <h1>Inicio</h1>
        </center>

        <select name="Genero" id="color">
            <option value="h">Hombres</option>
            <option value="m">Mujeres</option>
        </select>

        <br>
        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/originals/97/6d/07/976d07dc1740e717c7d842836c7ca85f.jpg" class="img-fluid" alt="..." height="100%" width="100%">
                    <div class="card-body">
                        <h5 class="card-title">Juan Carlos Salas</h5>
                        <center> <button type="button" class="btn btn-info">Detalles</button></center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://img.allvipp.com/www-promipool-de/image/upload/c_fill,g_faces,w_1200,h_1200,q_auto:eco,f_jpg/eminem_210608_grbnhncg3y" class="rounded" alt="..." height="100%" width="100%">
                    <div class="card-body">
                        <h5 class="card-title">Alejandro Cruz</h5>
                        <center> <button type="button" class="btn btn-info">Detalles</button></center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://los40es00.epimg.net/los40/imagenes/2019/07/22/videojuegos/1563796861_520833_1563796957_miniatura_normal.jpg" class="card-img-top" alt="..." height="100%" width="100%">
                    <div class="card-body">
                        <h5 class="card-title">Kevin Villafuerte</h5>
                        <center> <button type="button" class="btn btn-info">Detalles</button></center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/originals/e5/aa/50/e5aa5009469b1b7ff31603c3c115573c.jpg" class="card-img-top" alt="..." height="100%" width="100%">
                    <div class="card-body">
                        <h5 class="card-title">Jonathan Mendez</h5>
                        <center> <button type="button" class="btn btn-info">Detalles</button></center>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">RabbitBoys</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>