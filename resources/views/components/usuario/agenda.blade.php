@extends('layouts.appStripper')

@section('head')
<title>Inicio Stripper</title>
@endsection

@section('content')
<div class="container">
    <div id="agenda">
        calendario
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="form2" name="form2">

                  {!! csrf_field() !!}

                    <div class="mb-3">
                      <label for="id" class="form-label d-none">ID:</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted d-none">Help text</small>
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Titulo</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
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
                    <div class="mb-3">
                      <label for="start" class="form-label">Start</label>
                      <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
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
