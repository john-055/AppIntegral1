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
        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
      <script type="text/javascript">
         @if (session()->has('cuenta_baja'))
           var mam = '{{ Session::get("cuenta_baja") }}';
           Swal.fire({
             title: "Información",
             text: mam,
             icon: "info",
           });
         @endif
      </script>
        <div class="col-md-8">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar contraseña') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-7">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recuperar contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
