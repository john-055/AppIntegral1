@extends('layouts.appUser')

@section('head')
<title>Detalle Stripper</title>
@endsection

@section('content')
    <div class="container-xxl py-5">

        <center>
            <h1>fotos del Stripper</h1>
        </center>

        <!-- Team Start -->
    <div class="container-xxl py-5" id="cont1">
        <div class="container">
            <div class="row g-4">

                  <!-- Section: Images -->
<section class="">
    <div class="row">
        @php ($i = 1)
        @foreach($imagenes as $imagen)
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="{{asset($imagen->url)}}"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal{{$i++}}">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!-- Section: Images -->

  <!-- Section: Modals -->
  <section class="">
    <!-- Modal 1 -->
    @php ($i = 1)
    @foreach($imagenes as $imagen)
    <div
      class="modal fade"
      id="exampleModal{{$i++}}"
      tabindex="-1"
      aria-labelledby="exampleModal{{$i}}Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <img src="{{asset($imagen->url)}}" class="img-fluid" alt="...">
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
@endforeach
<br>
<center>
    <h4 class="text-black">Información del contrato</h4>
</center>
<div class="d-flex justify-content-center">
    <div class="card border-dark" style="width: 80%; height: auto;">
      <div class="card-body">


        <div class="row g-3">
          <div class="col-md-6">
            <label for="name"  class="col-form-label text-md-end">{{ __('Nombre') }}</label>
            <input id=" " type="input" class="form-control @error(' ') is-invalid @enderror" name=" " value="{{$strippers->nombre}}" required autocomplete="" autofocus disabled>
          </div>
          <div class="col-md-6">
            <label for="apePat" class="col-form-label text-md-end">{{ __('Apellido') }}</label>
            <input id=" " type="input" class="form-control @error(' ') is-invalid @enderror" name=" " value="{{$strippers->apePat}}" required autocomplete="" autofocus disabled>
          </div>

          <div class="col-6">
              <label for="email" class=" ">{{ __('Genero') }}</label>
              <input id=" " type="input" class="form-control @error(' ') is-invalid @enderror" name=" " value="{{$strippers->genero}}" required autocomplete="" autofocus disabled>
          </div>

          <div class="col-6">
            <label for=" ">{{ __('Edad') }}</label>
            <input id=" " type="input" class="form-control @error(' ') is-invalid @enderror" name=" " value="{{$edad}}" required autocomplete="" autofocus disabled>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$strippers->descripcion}}</textarea>
          </div>
          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
          <div class="row mb-3">
            <label for="apodo" class="col-md-4 col-form-label text-md-end">{{ __('Precio del Servicio') }}</label>
            <div class="col-md-6">
              <input id=" " type="text" class="form-control @error(' ') is-invalid @enderror" name="" value="{{$strippers->precio}}" required autocomplete=" " disabled>
            </div>
          </div>
        </div>
        <div class="container">
          <div id="agenda">

          </div>
      </div>






      </div>
    </div>
  </div>
  </section>
  <!-- Section: Modals -->
</section>
<!-- Modal gallery -->

            </div>
        </div>
    </div>
</div>
    <!-- Team End -->
    <br>
    <br>
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
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                           
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Titulo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          <div class="mb-3">
                            <label for="descripcion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder=""> 
                          </div>
                          <div class="mb-3">
                            <label for="descripcion" class="form-label">Número de contacto</label>
                            <input type="text" class="form-control" name="numeroCli" id="denumeroCli" aria-describedby="helpId" placeholder=""> 
                          </div>
                          <div class="mb-3">
                            <label for="descripcion" class="form-label">forma de Pago</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" value="tarjeta" name="formaPago" id="formaPago">
                              <label class="form-check-label" for="formaPago">
                                Tarjeta
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" value="Efectivo" name="formaPago" id="formaPago2" checked>
                              <label class="form-check-label" for="formaPago2">
                                Efectivo
                              </label>
                            </div> 
                          </div>
                          <div class="mb-3">
                           
                            <input type="text" class="form-control" value="{{$strippers->idStripper}}" name="idStripper" id="idStripper" aria-describedby="helpId" placeholder=""> 
                          </div>

                          <div class="mb-3">
                            <label for="descripcion" class="form-label">Decripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>

                          <div class="mb-3">
                            <label for="horaIni" class="form-label">Hora inicio</label>
                            <input type="time" min="21:00" max=":00" class="form-control" name="horaIni" id="horaIni" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="mb-3">
                            <label for="horaFin" class="form-label">Hora Fin</label>
                            <input type="time" min="21:00" max="3:00" class="form-control" name="horaFin" id="horaFin" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="mb-3 d-none">
                            
                            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="mb-3 d-none">
                            <label for="end" class="form-label">End</label>
                            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                      <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                      <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
@endsection
@section('script')

@endsection
