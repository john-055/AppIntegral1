@extends('layouts.app')

@section('content')
<body  >
    <div style="background-image: url(https://www.mundoglam.co/wp-content/uploads/Moda-hombres-Foto-principal.jpg); width: 100%; height: 100%;">
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
                <div class="card-header text-white"><h1 class="text-center">{{ __('Registro') }}</h1></div>

                <div class="card-body"  >
                    <form method="POST" action="{{ url('/resgistro')}}" enctype="multipart/form-data"> 
                        @csrf

                        <div class="row g-3">
                            
                            <div class="col-md-6">
                                <label for="name"  class="col-md-4 col-form-label text-md-end text-white">{{ __('Nombres') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                            <div class="col-md-6">
                                <label for="apePat" class="col-md-4 col-form-label text-md-end text-white">{{ __('Apellido Paterno') }}</label>
                               <input id="apePat" type="text" class="form-control @error('apePat') is-invalid @enderror" name="apePat" value="{{ old('apePat') }}" required autocomplete="apePat" autofocus>

                                @error('apePat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="apeMat" class="col-md-4 col-form-label text-md-end text-white">{{ __('Apellido Materno') }}</label>
                               <input id="apeMat" type="text" class="form-control @error('apeMat') is-invalid @enderror" name="apeMat" value="{{ old('apeMat') }}" required autocomplete="apeMat" autofocus>

                                @error('apeMat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-white">{{ __('Correo Electronico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                            <div class="col-6">
                                <label for="fechaNa" class="text-white">{{ __('Fecha de Nacimiento') }}</label>
                                <input id="fechaNa" style="width: 150px" type="date" class="form-control @error('fechaNa') is-invalid @enderror" name="fechaNa" value="{{ old('fechaNa') }}" required autocomplete="fechaNa" autofocus>

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
                                <input id="apodo" type="text" class="form-control @error('apodo') is-invalid @enderror" name="apodo" value="{{ old('apodo') }}" required autocomplete="apodo">

                                @error('apodo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            
                            
                            <label for="password" class="col-md-4 col-form-label text-md-end text-white">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                
                                    <i id="icono" style="color: white" class="bi bi-eye" aria-hidden="true"></i>

                                
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" name="password" required autocomplete="new-password">
                                
                               
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-white">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <i id="icono2" name="icono2" style="color: white" class="bi bi-eye" aria-hidden="true"></i>
                                <input id="password-confirm" type="password" class="form-control" value="{{old('password_confirmation')}}" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="rol" class="col-md-4 col-form-label text-md-end text-white">{{ __('Rol') }}</label>
                                <select name="rol" value="{{old('rol')}}" class="form-select" aria-label="Default select example">
                                    <option value=" " selected>Seleccione su rol</option>
                                    <option value="3">Usuario</option>
                                    <option value="2">Stripper</option>
                                   
                                  </select>
                                  
                                @error('rol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="genero" class="col-md-4 col-form-label text-md-end text-white">{{ __('Genero') }}</label>
                                <select  value="{{old('genero')}}" name="genero" class="form-select" aria-label="Default select example">
                                    <option value="{{old('genero')}}" selected>Seleccione su Genero</option>
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
                                <input id="img" accept="image/png,image/jpeg,image/jpg" type="file" value="{{old('img')}}" class="form-control" name="img">

                            </div>
                        </div>
                        




                        <div class="row mb-3" style="margin-left: 205px">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary text-white" style="width: 270px">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="col-md-6">
                                <button type="button" class="btn btn-warning text-center" style="height: 40px" >
                                    <a class="nav-link text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function mostrar(){
        var tipo = document.getElementById("password");
        var icono = document.getElementById("icono");
        console.log(tipo.type);
        if(tipo.type == "password"){
            tipo.type = 'text';
            icono.classList.add('bi bi-eye-slash');
           
        }else{
            tipo.type = 'password';
            console.log('no entro');
            icono.classList.add('bi bi-eye');
        }
    }
</script>
<script src="{{'js/registro.js'}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</div>
</body>
@endsection
