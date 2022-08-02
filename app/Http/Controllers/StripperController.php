<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stripper;
use App\Models\User;
use App\Models\Foto;

class stripperController extends Controller
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
        //
        $strippers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "2")
        ->where("User.status", "=", "false")
        ->get();
        $totalStripers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "2")
        ->where("User.status", "=", "false")
        ->count();
        return View('components.administrador.pendienteStri', compact('strippers', 'totalStripers'));
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

    public function subirFoto(Request $request)
    {
        $rules = [
            'img' => 'image|mimes:jpeg,png,jpg',
           
            
        ];
        $messages = [
            'img.mimes' => 'Solo se aceptan archivos con extensiones .jpeg, .png o .jpg.',

        ];
        $this->validate($request, $rules, $messages);
 
        $fotoStri = new Foto();

        $stripper = Stripper::where("idUsuario", \Auth::user()->id)->first();

        if($request->hasFile('img')){
            $foto = $request->file('img');
            $destinoPath = 'images/featureds/';
            $filename = time() . '-' . $foto->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinoPath, $filename);
            $fotoStri->url = $destinoPath . $filename;
            $fotoStri->idStripper = $stripper->idStripper;
            $fotoStri->save();
            return back()->with('success', 'Se guardo la imagen correctamente');
        }

        return back()->with('error', 'Algo salio mal');


    }

    public function eleminarFoto($id){
        $foto = Foto::find($id);
        $imagenPrin = $foto->url;
            $imagePath = public_path($imagenPrin);
            if(\File::exists($imagePath)){
                unlink($imagePath);
                $foto->delete();
                return back()->with('success', 'Se elimino la imagen correctamente');
            }
            return back()->with('error', 'Algo salio mal');
    }
}
