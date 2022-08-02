@extends('layouts.appStripper')

@section('head')
<title>Inicio Stripper</title>
@endsection

@section('content')
  @if (!auth()->check())
  <?php
  return redirect('/login');
  echo("hola");
  ?>
  @else

  @endif
    <div class="container" style="margin-top: 15px; margin-bottom: 15px; ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-image: linear-gradient(to top, #b1dbef 4%,  #fff1eb 96%);">
                  @if(session('success'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      {{session('success')}}
                  </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{session('error')}}
              </div>
                @endif
              @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <p>Corrige los siguientes errores:</p>
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="card-header">
                        <div class="card-header"><h1 class="text-center">{{ __('Inicio') }}</h1></div>
                    </div>


                    <div class="card-body">
                      
                        <div class="container px-4 py-5" id="featured-3">
                            <h3 class="pb-2 border-bottom text-center">Fotos</h3>
                          
                            <div class="row mb-3">
                              <form method="Post" enctype="multipart/form-data" action="{{Route('foto')}}">
                                @csrf
                              <label for="img" class="">{{ __('Subir Imagen') }}</label>
                              <div class="col-md-6">
                                  <input id="img" accept="image/png,image/jpeg,image/jpg" type="file" value="" class="form-control" name="img">
                                  <br>
                                  <button type="submit" class="btn btn-success text-white" >
                                    {{ __('subir') }}
                                </button>
                                </div>
                              </form> 
                          </div>
                          <div class="row mb-3" style="margin-left: 160px">
    

                        </div>
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

                          
                              <div class="feature col text-center">
                                
                                <div class="card" style="width: 18rem;">
                                  @foreach ($fotos as $foto)
                                  <img class="card-img-top" src="{{asset($foto->url)}}" alt="No se puede cagar la imagen">
                                  <div class="card-body" style="background-image: linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%);">
                                    <form method="Post" enctype="multipart/form-data" action="{{Route('EliminarFoto',  ['id'=> $foto->idFoto])}}">
                                      @csrf
                                    <button type="submit" style="background-color: #700b06" class="btn btn-primary">Eleminar</button>
                                    </form>
                                  </div>
                                  @endforeach
                                </div>
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </div>                        
<style>
    ol{
        list-style: none;
        display: grid;
        grid-template-columns: repeat(7, 1fr);
    }
    .first-day{
        grid-column-start: 4;
    }
    .day-name{
        background: #eee;
        font-weight: bold;
    }


</style>
                            <h3 class="text-center">{{ __('Agenda') }}</h3></div>
                           <div>
                            <div class="container">
                              <div id="agenda">
                              
                              </div> 
                          </div>
                          
                          
                           <!-- Modal -->
      <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contratación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="form2" name="form2">

                      {!! csrf_field() !!}

                        <div class="mb-3 d-none">
                          <label for="id" class="form-label d-none">ID:</label>
                          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" disabled>
                         
                        </div>
                        <div class="mb-3">
                          <label for="title" class="form-label">Titulo</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="" disabled>
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <div class="mb-3">
                          <label for="descripcion" class="form-label">Dirección</label>
                          <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="" disabled> 
                        </div>
                        <div class="mb-3">
                          <label for="descripcion" class="form-label">Número de contacto</label>
                          <input type="text" class="form-control" name="numeroCli" id="denumeroCli" aria-describedby="helpId" placeholder="" disabled> 
                        </div>
                        <div class="mb-3">
                          <label for="descripcion" class="form-label">forma de Pago</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="tarjeta" name="formaPago" id="formaPago" disabled>
                            <label class="form-check-label" for="formaPago">
                              Tarjeta
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="Efectivo" name="formaPago" id="formaPago2" checked disabled>
                            <label class="form-check-label" for="formaPago2">
                              Efectivo
                            </label>
                          </div> 
                        </div>


                        <div class="mb-3">
                          <label for="descripcion" class="form-label">Decripcion</label>
                          <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" disabled>
                         
                        </div>

                        <div class="mb-3">
                          <label for="horaIni" class="form-label">Hora inicio</label>
                          <input type="time" min="21:00" max=":00" class="form-control" name="horaIni" id="horaIni" aria-describedby="helpId" placeholder="" disabled>
                         
                        </div>
                        <div class="mb-3">
                          <label for="horaFin" class="form-label">Hora Fin</label>
                          <input type="time" min="21:00" max="3:00" class="form-control" name="horaFin" id="horaFin" aria-describedby="helpId" placeholder="" disabled>
        
                        </div>
                        <div class="mb-3 d-none">
                          
                          <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="" disabled>
                          
                        </div>
                        <div class="mb-3 d-none">
                          <label for="end" class="form-label">End</label>
                          <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="" disabled>
           
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success d-none" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning d-none" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger d-none" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
