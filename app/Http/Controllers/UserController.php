<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Foto;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $strippers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
       ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
       ->where("model_has_roles.role_id", "=", "2")
       ->where("User.status", "=", "true")
       ->get();

       


       return response()->view('components.usuario.inicioUser', compact('strippers'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('inicioUser.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verStripper($id){
        $strippers = User::join("stripper as str", "str.idUsuario", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.fechaNa", "user.username", "user.email", "user.foto", "user.status", "user.genero", "str.idStripper", "str.descripcion", "str.precio", "str.correo", "str.telefono", "str.idUsuario")
        ->first();

        $edad = Carbon::createFromDate($strippers->fechaNa)->age;

 
        $imagenes = Foto::where('idStripper', $strippers->idStripper)->get();
        return View('components.usuario.detalleStripper', compact('strippers', 'imagenes', 'edad'));
        
    }
}
 