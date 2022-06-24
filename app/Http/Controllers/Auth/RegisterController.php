<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UsuarioRol;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   protected function validator(array $data)
    {
      return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {
        $nombre = $request['name'];


        $usuario = new User();
        $usuario->nombre = $request['name'];
        $usuario->apePat = $request['apePat'];
        $usuario->apeMat = $request['apeMat'];
        $usuario->username = $request['apodo'];
        //subida de imagen 

        if($request->hasFile('img')){
            $foto = $request->file('img');
            $destinoPath = 'images/featureds';
            $filename = time() . '-' . $foto->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinoPath, $filename);
            $usuario->foto = $destinoPath . $filename;
        }
        $rol = $request['rol'];
        $usuario->correo = $request['email'];
        if($rol == "2"){
            $usuario->status = "false";
        }else{
            $usuario->status = "true";
        }
        $usuario->genero = $request['genero'];
        $usuario->fechaNa = $request['fechaNa'];

        //fin 
        $password = $request['password'];
        $usuario->password = Hash::make($request['password']);


       
         $usuario->save();
                 //insercion del rol a la tabla has_model_rol
        $usuarioRol = new UsuarioRol();
        $usuarioRol->role_id = $request['rol'];
        $usuarioRol->model_type = "App\Models\User";
        $usuarioRol->model_id = $usuario->id;
        $usuarioRol->save();
        return back()->with('success', 'Registro con éxito');
       
    }
}
