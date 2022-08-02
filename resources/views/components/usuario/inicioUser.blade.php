@extends('layouts.appUser')

@section('head')
<title>Inicio Usuario</title>
@endsection

@section('content')
    <div class="container-xxl py-5">

        <center>
            <h1>Strippers disponibles</h1>
        </center>

        <!-- Team Start -->
    <div class="container-xxl py-5" id="cont1">
        <div class="container">
            <div class="row g-4">
                @foreach ($strippers as $striper)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset($striper->foto)}}" alt="">
                            <div class="team-social">
                                <form method="POST" action="{{Route('verStripper', ['id'=>$striper->id])}}">
                                    @csrf
                                    <button type="submit" class="btn btn-square">Detalle</button>
                                </form>
                            </div>
                        </div>
                        <div class="bg-dark text-center p-4">
                            <h5 class="text-uppercase text-white">{{$striper->nombre}}</h5>
                            <h5 class="text-uppercase text-white">{{$striper->apePat}}</h5>
                            <form method="POST" action="{{Route('verStripper', ['id'=>$striper->id])}}">
                                @csrf
                                <button type="submit" class="btn btn-info">Detalle</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <!-- Team End -->
    <br>
    <br>
    @endsection