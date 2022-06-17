
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased" background="{!! asset('imagenes/fondo.jpg') !!}">

<br>
<br>


    <nav class="navbar navbar-dark bg-dark d-flex fixed-top" >



        <a class="navbar-brand px-3" href="#">
            <img src="{!! asset('imagenes/logo.jpeg') !!}" alt="" width="85" height="49">
        </a>



        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-3 py-3 ">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-light">Inicio</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-light">Iniciar Sesión</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-light">Register</a>
            @endif
            @endauth
            @endif
    </nav>

    <br>

    <div class="container">


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="" width="1300px" height="500px" src="{!! asset('imagenes/carr2.jpg') !!}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="" width="1300px" height="500px" src="{!! asset('imagenes/carr3.jpg') !!}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="" width="1300px" height="500px" src="{!! asset('imagenes/carr1.jpg') !!}" alt="Third slide">
@extends('layouts.app')

@section('content')
<body style="">
<br>
<br>
<center>
    <div img>
<img src="{{asset('images/Logo.png')}}">
</div>
</center>
<br>
<style>
    body {
        background-image: url("http://www.diariovasco.com/noticias/201502/27/media/tolosa--575x352.jpg");


    }

    .card {
        background-color: #D0D3D4;
    opacity: .9;
    }

    .background-image {
  filter: blur(6px);
}

</style>

<br>
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">


                                <br>
                            </div>
                        </div>
                
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Quienes Somos</h4>
                <p class="card-text">Somos una empresa de servicios profesionales especializada en desarrollar e implementar las mejores soluciones en dirección, estrategia y gestión, adecuadas a la necesidad de cada cliente.
                    Lo que caracteriza a Managers es el involucramiento activo de nuestros profesionales en la gestión e implementación de las soluciones propuestas en cada empresa a partir de una visión integral y estratégica.</p>
                <p class="card-text"><small class="text-muted">RabbitBoys</small></p>
            </div>
            <img class="card-img-bottom" src="{!! asset('imagenes/somos.gif') !!}" width="1300px" height="500px" alt="Card image cap">
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #45637d;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Iframe -->
    <section class="">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
          <div class="ratio ratio-16x9">
            <iframe
              class="shadow-1-strong rounded"
              src="https://www.youtube.com/embed/vlDzYIIOYmM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Iframe -->
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
    </div>
</div>
</body>
@endsection
