@extends('layouts.appStripper')

@section('head')
<title>Inicio Stripper</title>
@endsection

@section('content')
    <div class="container" style="margin-top: 15px; margin-bottom: 15px; ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-image: linear-gradient(to top, #b1dbef 4%,  #fff1eb 96%);">
                    <div class="card-header">
                        <div class="card-header"><h1 class="text-center">{{ __('Inicio') }}</h1></div>
                    </div>
                    <div class="card-body">
                        <div class="container px-4 py-5" id="featured-3">
                            <h3 class="pb-2 border-bottom text-center">Fotos</h3>
                          
                          
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                          
                          
                              <div class="feature col text-center">
                                <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="" alt="No se puede cagar la imagen">
                                  <div class="card-body" style="background-image: linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%);">
                                      <button type="button" style="background-color: #13b10bc5" class="btn btn-primary">Ver</button>
                                      <button type="button" style="background-color: #700b06" class="btn btn-primary">Eleminar</button>
                                  </div>
                                </div>
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="feature col text-center">
                                <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="" alt="No se puede cargar la imagen">
                                  <div class="card-body" style="background-image: linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%);">
                                    <button type="button" style="background-color: #13b10bc5" class="btn btn-primary">Ver</button>
                                    <button type="button" style="background-color: #700b06" class="btn btn-primary">Eleminar</button>
                                  </div>
                                </div>
                              </div>
                             </div>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <div class="feature col text-center">
                               <div class="card" style="width: 18rem;">
                                 <img class="card-img-top" src="" alt="No se puede cargar la imagen">
                                 <div class="card-body" style="background-image: linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%);">
                                    <button type="button" style="background-color: #13b10bc5" class="btn btn-primary">Ver</button>
                                    <button type="button" style="background-color: #700b06" class="btn btn-primary">Eleminar</button>
                                 </div>
                               </div>
                             </div>
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
                           <h1>Junio 2022</h1>

                           <ol>
                            <li class="day-name">Lun</li>
                            <li class="day-name">Mar</li>
                            <li class="day-name">Mie</li>
                            <li class="day-name">Jue</li>
                            <li class="day-name">Vie</li>
                            <li class="day-name">Sab</li>
                            <li class="day-name">Dom</li>

                            <li class="first-day">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                           </ol>
                           </div>
                          </div>
                    </div>
                </div>
            </div>
@endsection
