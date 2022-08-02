<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Stripper; 
use Illuminate\Http\Request;
use Carbon\Carbon;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return View('components.usuario.agenda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate(Evento::$rules);
        //'numero_parcial'  => $request->get('numero_parcial'),
        $fechaActual = Carbon::now();

        $start = $request->get('start');
        $horaIni = $request->get('horaIni');
        $date = Carbon::parse($horaIni);
        $date1 = $date->format('H:i:s');
        $date2 = Carbon::parse($start);
        $date3 = $date2->format('Y-m-d');

        if($date2 <= $fechaActual){
            return response()->json('No');
        }



        $direccion = $request->get('direccion');
        $numeroCli = $request->get('numeroCli');
        $estatus = "pendiente";
        $formaPago = $request->get('formaPago');
        $idUsuario = \Auth::user()->id;
        $idStripper = $request->get('idStripper');

        $fecha3 = strtotime($date1, strtotime($date3)) ;
        $fechaStart = date ('Y-m-d H:i:s', $fecha3);
        
        $fechac = Evento::where("timeStrart", $fechaStart)->exists();
        if($fechac){
            return response()->json('No');
        }
        $end = $request->get('end');
        $horaFin = $request->get('horaFin');
        $fecha = Carbon::parse($horaFin);
        $horafin = $fecha->format('H:i:s');
        $fechaFin = Carbon::parse($end);
        $fechaFin = $fechaFin->format('Y-m-d');

        $fecha4 = strtotime($horafin, strtotime($fechaFin)) ;
        $fechaEnd = date ('Y-m-d H:i:s', $fecha4);

        $evento = Evento::create([
            'title' => $request['title'],
            'descripcion' => $request['descripcion'],
            'start' => $fechaStart,
            'end' => $fechaEnd,
            'timeStrart' => $fechaStart,
            'timeEnd' => $fechaEnd,
            'direccion' => $direccion,
            'numeroCli' => $numeroCli,
            'estatus' => $estatus,
            'formaPago' => $formaPago,
            'idUsuario' => $idUsuario,
            'idStripper' => $idStripper
        ]);
        //$evento = Evento::create($request->all());
       
        //$hora = $request('hora');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
        $evento = Evento::all();
       return response()->json($evento);
    }

    public function showStri(Evento $evento)
    {
        //
        $stripper = Stripper::where("idUsuario", \Auth::user()->id)->first();
        $evento = Evento::where("idStripper", $stripper->idStripper)->get();
       return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $evento = Evento::find($id);
        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');
        $evento->timeStrart = Carbon::createFromFormat('Y-m-d H:i:s', $evento->timeStrart)->format('H:i');
        $evento->timeEnd = Carbon::createFromFormat('Y-m-d H:i:s', $evento->timeEnd)->format('H:i');
        return response()->json($evento);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
        $evento2 = Evento::find($evento->id);
        if($evento2->idUsuario == \Auth::user()->id){
            
            request()->validate(Evento::$rules);
            $evento->update($request->all());
            return response()->json($evento);
        }
        return response()->json('No');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $evento = Evento::find($id);
        if($evento->idUsuario == \Auth::user()->id){
            
            $evento = Evento::find($id)->delete();
            return response()->json($evento);
        }
        return response()->json('No');
    }
}
 