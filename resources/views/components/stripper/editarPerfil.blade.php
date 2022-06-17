@extends('layouts.app')

@section('content')
<body style="background-color: #FFFFFF; background-image: linear-gradient(180deg, #FFFFFF 0%, #4d5b8c 50%, #ec4646 100%);">
    <div class="container">
        <center>
        <h2 style="color:#000000">Editar Perfil</h2>
        </center> 
        <div class="container p-8" style="text-align: center; font-size: 20px;border-radius: 5px; border:3px solid rgb(0, 0, 0);">
            <center>
                <div class="form-group">
                    <img height="200 px" src="/stripper/Perfil.png"/>   
                </div>
            </center>
            <div class="row">
                <div class="col-md-6">
                    <h6 style="color:#000000">Nombres: </h6>
                    <input type="text" name="Nombres" disabled class="form-control" placeholder="Nombres">
                </div>
            
                <div class="col-md-6">
                    <h6 style="color:#000000">Apellidos: </h6>
                    <input type="text" name="Apellidos" disabled class="form-control" placeholder="Apellidos">
                    <br>
                </div>
    
                <div class="col-md-6">
                    <h6 style="color:#000000">Fecha Nacimeinto: </h6>
                    <input type="date" value="1996-01-01" disabled>
                </div>
    
                <div class="col-md-6">
                    <h6 style="color:#000000">Correo: </h6>
                    <input type="email" name="correo" disabled class="form-control" placeholder="Correo">
                    <br>
                </div>
    
                <div class="col-md-5"></div>
                <center>
                    <div class="col-md-4">
                        <a><input class="btn btn-primary btn-block" value="Actualizar"></a>
                    </div><br>
                </center>
            </div>
        </div>
    </div>
</body>
@endsection