@extends('layouts.appStripper')

@section('head')
<title>Editar Perfil</title>
@endsection

@section('content')
<br>
<center>
<h2 class="mb-4">Editar Perfil</h2>
</center>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"  style="background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(21, 13, 13, 0.4) 0%, rgba(0,0,0,0.40) 120%) #272828;
                background-blend-mode: multiply,multiply;   opacity: 0.8;">
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
                    <div class="card-header text-white">

                    </div>

                    <div class="card-body"  >
                        <form method="POST" action="{{ Route('actualizarUser',['id'=>Auth::user()->id])}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">
                                <div class="text-center">
                                 <img src="{{asset(Auth::user()->foto)}}" name="originalFoto" class="mx-auto d-block" style="width: 250px; height: 200px;" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <label for="name"  class="col-form-label text-md-end text-white">{{ __('Nombres') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->nombre}}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <label for="apePat" class="col-form-label text-md-end text-white">{{ __('Apellido Paterno') }}</label>
                                   <input id="apePat" type="text" class="form-control @error('apePat') is-invalid @enderror" name="apePat" value="{{Auth::user()->apePat}}" required autocomplete="apePat" autofocus>

                                    @error('apePat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="apeMat" class=" col-form-label text-md-end text-white">{{ __('Apellido Materno') }}</label>
                                   <input id="apeMat" type="text" class="form-control @error('apeMat') is-invalid @enderror" name="apeMat" value="{{Auth::user()->apeMat}}" required autocomplete="apeMat" autofocus>

                                    @error('apeMat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="email" class="col-form-label text-md-end text-white">{{ __('Correo Electronico') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email" autofocus disabled>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                                <div class="col-6">
                                    <label for="fechaNa" class="text-white">{{ __('Fecha de Nacimiento') }}</label>
                                    <input id="fechaNa" style="width: 150px" type="date" class="form-control @error('fechaNa') is-invalid @enderror" name="fechaNa" value="{{Auth::user()->fechaNa}}" required autocomplete="fechaNa" autofocus>

                                    @error('fechaNa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
    <br>

                            <div class="row mb-3">
                                <label for="apodo" class="col-md-4 col-form-label text-md-end text-white">{{ __('Apodo de Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="apodo" type="text" class="form-control @error('apodo') is-invalid @enderror" name="apodo" value="{{Auth::user()->username}}" required autocomplete="apodo">

                                    @error('apodo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <label for="genero" class="col-md-4 col-form-label text-md-end text-white">{{ __('Genero') }}</label>
                                <div class="col-md-6">
                                    <select  value="{{old('genero')}}" name="genero" class="form-select" aria-label="Default select example">
                                        @if(Auth::user()->genero == "M")
                                        <option value="{{Auth::user()->genero}}" selected>Hombre</option>
                                        @elseif(Auth::user()->genero == "F")
                                        <option value="{{Auth::user()->genero}}" selected>Mujer</option>
                                        @else
                                        <option value="{{Auth::user()->genero}}" selected>Otro</option>
                                        @endif
                                        <option value="M">Hombre</option>
                                        <option value="F">Mujer</option>
                                        <option value="O">Otro</option>

                                      </select>

                                    @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            </div>

                            <div class="row mb-3">

                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                <label for="img" class="col-md-4 col-form-label text-md-end text-white">{{ __('Imagen') }}</label>
                                <div class="col-md-6">
                                    <input id="img" accept="image/png,image/jpeg,image/jpg" type="file" value="" class="form-control" name="img">

                                </div>
                            </div>




                            <div class="row mb-3" style="margin-left: 160px">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-success text-white" style="width: 250px">
                                        {{ __('Actualizar') }}
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection
