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
        <div class="col-md-8">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">


                                <br>
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
