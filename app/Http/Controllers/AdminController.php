<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stripper;
use App\Models\User;
use App\Models\UsuarioRol;

use Illuminate\Validation\Rule;
use Carbon\Carbon;

class AdminController extends Controller
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
    public function inicio()
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
        return View('components.administrador.incioAdmin', compact('strippers', 'totalStripers'));
    }

   public function pendiente()
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

    public function acceptados()
    {
        //
        $strippers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "2")
        ->where("User.status", "=", "true")
        ->get();
        $totalStripers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "2")
        ->where("User.status", "=", "false")
        ->count();
        return View('components.administrador.acceptados', compact('strippers', 'totalStripers'));
    }

    public function clientes()
    {
        //
        $clientes = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "3")
        ->get();
        $totalStripers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
        ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
        ->where("model_has_roles.role_id", "=", "2")
        ->where("User.status", "=", "false")
        ->count();
        return View('components.administrador.clientes', compact('clientes', 'totalStripers'));
    }



    public function registerStr(Request $request, $id)
    {
        $data = request()->validate([
            'precio' =>  'numeric|required|min:1000|max:10000',
          ]);
        
        if(\DB::table('user')->where('id', $id)->exists()){

            $usuario = user::where('id', $id)->first();
            $usuario->status = "true";            
            $stripper = new Stripper();
            $stripper->descripcion = "nuill";
            $stripper->precio = $request['precio'];
            $stripper->telefono = "null";
            $stripper->idusuario = $id;
            $stripper->correo = "null";
            $stripper->save();
            $usuario->update();
            return back()->with('success', 'Stripper registrado con éxito.');

        }
        return back()->with('error', 'No se encontro al usuario.');
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

        $usuario = User::find($id);
        return response()->json($usuario); 
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

        $usuario = User::find($id);
                 //Métodos de las validaciones 


        $fechaNa = $request['fechaNa'];
        $ano = Carbon::createFromDate($fechaNa)->age;
        if($ano < 22){
            return back()->with('error', 'Debes tener más de 22 años para registrarte. ');
        }

        $data = request()->validate([
            'name' => 'required|max:150',
            'apodo' => 'max:150',
            'apePat' => 'required|max:150',
            'apeMat' => 'required|max:150',
          ]);
 
          $rules = [
            'genero' => 'required|max:1|in:M,F,O',
            'fechaNa' => 'required',
        ];
        $messages = [
            'genero.in' => 'No se acepta ese genero.',
        ];
        $this->validate($request, $rules, $messages);
        //Fin de las validaciones 
        $nombre = $request['name'];
        $usuario->nombre = $nombre;
        $usuario->apePat = $request['apePat'];
        $usuario->apeMat = $request['apeMat'];
        $usuario->genero = $request['genero'];
        $usuario->fechaNa = $request['fechaNa'];
        $apodo = $request['apodo'];
        if($apodo !== \Auth::user()->username){
            if(\DB::table('user')->where('username', $apodo)->exists()){
                return back()->with('error', 'El usuario ya heciste');
            }
        }

        $usuario->username = $request['apodo'];
        if($request->hasFile('img')){
            $rules = [
                'img' => 'mimes:jpeg,png,jpg',
            ];
            $messages = [
                'img.mimes' => 'Solo se aceptan archivos con extensiones .jpeg, .png o .jpg.',
            ];
            $this->validate($request, $rules, $messages);
            $imagenPrin = \Auth::user()->foto;
            $imagePath = public_path($imagenPrin);
            if(\File::exists($imagePath)){
                unlink($imagePath);
            }
            $foto = $request->file('img');
            $destinoPath = 'images/featureds/';
            $filename = time() . '-' . $foto->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinoPath, $filename);
            $usuario->foto = $destinoPath . $filename;
        }

        $usuario->update();

        return back()->with('success', 'Perfil Actualizado. ');

        
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
        $usuario = User::where('id', $id)->first();

        $rol = \DB::delete('DELETE FROM model_has_roles WHERE model_id = :id', ['id'=> $id]);
       // \DB::delete('delete users where name = ?', ['John'])
 

        $imagenPrin = $usuario->foto;
        $imagePath = public_path($imagenPrin);
        if(\File::exists($imagePath)){
            unlink($imagePath);
        }
        $usuario->delete();
        return back()->with('eliminar', 'ok');

    }
}
