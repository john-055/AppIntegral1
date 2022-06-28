<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Stripper</title>

    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #FFFFFF; background-image: linear-gradient(180deg, #FFFFFF 0%, #4d5b8c 50%, #ec4646 100%);">
    <div class="container" style="margin-top: 15px; margin-bottom: 15px; ">
    <center>
    <div img>
<img src="{{asset('images/Logo.png')}}">
</div>
</center>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-image: linear-gradient(to top, #b1dbef 4%,  #fff1eb 96%);">
                    <div class="card-header">
                        <div class="card-header"><h1 class="text-center">{{ __('Detalle Show') }}</h1></div>
                    </div>
                    <div class="card-body">
                        <div class="container px-4 py-4" id="featured-3">

                            <div class="row g-3">
                                <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Fecha') }}</label>
                        <div class="col-md-6">
                                <input id="fecha" type="fecha" class="form-control @error('fecha') is-invalid @enderror" name="fecha" style="width : 100px;">
                        </div>

                        <label for="email" class="col-md-1 col-form-label text-md-end">{{ __('Hora') }}</label>
                                <input id="hora" type="hora" class="form-control @error('fecha') is-invalid @enderror" name="hora" style="width : 100px;">

                        </div>

                        <div class="row g-4 py-1 row-cols-1 row-cols-lg-1">

                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Dirección') }}</label>
                                <input id="hora" type="hora" class="form-control @error('fecha') is-invalid @enderror" name="hora" style="width : 300px;">
                            </div>

                            <div class="row g-4 py-1 row-cols-1 row-cols-lg-1">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Tel. Cliente') }}</label>
                                <input id="hora" type="hora" class="form-control @error('fecha') is-invalid @enderror" name="hora" style="width : 300px;">
                            </div>

                            <div class="row g-4 py-1 row-cols-1 row-cols-lg-1">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Tipo de Vestimenta') }}</label>
                                <input id="hora" type="hora" class="form-control @error('fecha') is-invalid @enderror" name="hora" style="width : 300px;">
                            </div>
<center>
                            <br>
                            <button type="submit" class="btn btn-dark">
                                    {{ __('Regresar') }}
                                </button>
                                </center>
<br>
<br>
<br>
<br>


                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
