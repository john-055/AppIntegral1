@extends('layouts.appAdmin')

@section('head')
<title>Acceptados</title>

@endsection

@section('content')
<h2 class="mb-4">Stripper Aceptados</h2>
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
                            <th scope="col">Eleminar</th>
                            <th scope="col">Detalle</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php($i=1)
                          @foreach ($strippers as $striper)
                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$striper->nombre}}</td>
                            <td>{{$striper->apePat}}</td>
                            <td>{{$striper->apeMat}}</td>
                            <td>{{$striper->genero}}</td>
                            <td>{{$striper->email}}</td>
                            <td><img class="img-thumbnail" src="{{asset($striper->foto)}}" alt="no hay foto..."></td>
                            <td>
                              <a  href="" ><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
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
                          @endforeach
                        
                        </tbody>
                      </table>
                      
@endsection

@section('script')

@endsection
