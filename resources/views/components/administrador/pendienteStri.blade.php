@extends('layouts.appAdmin')

@section('head')
<title>Pendiente</title>

@endsection

@section('content')
<h2 class="mb-4">Stripper por aceptar</h2>
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
@php($i=1)
@foreach ($strippers as $striper)
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aceptar</th>
                            <th scope="col">Eleminar</th>
                            <th scope="col">Detalle</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$striper->nombre}}</td>
                            <td>{{$striper->apePat}}</td>
                            <td>{{$striper->apeMat}}</td>
                            <td>{{$striper->genero}}</td>
                            <td>{{$striper->email}}</td>
                            <td><img class="img-thumbnail" src="{{asset($striper->foto)}}" alt="no hay foto..."></td>
                            <td> 
                                  <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg> Aceptar</button>
                                
                            </td>
                            <td>
                              <a  href="{{Route('eliminar', ['id'=> $striper->id])}}" ><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg> Eliminar</button>
                            </a>
                            </td>
                            <td>
                              <a>
                                <button type="button" class="btn btn-info">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                  </svg>
                                  Detalle
                                </button>
                              </a>
                            </td>
                          </tr>
                         
                          
                        </tbody>
                      </table>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Costo del servicio del Stripper</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{Route('cantidad', ['id' => $striper->id])}}">
                              @csrf
                              <div class="mb-3 text-center" style="margin-left: 10px;">
                                <label for="recipient-name" class="col-form-label">Precio $:</label>
                                <center><input type="number" name="precio" min="1000" max="10000" value="1000" style="border:1px solid black; width: 250px" class="form-control text-black" id="recipient-name"></center>
                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div> 
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
@endforeach
@endsection
                      
@section('script')

@endsection
