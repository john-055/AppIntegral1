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
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {

        //Métodos de las validaciones  
        $rol = $request['rol'];
        if($rol == "1"){
            return back()->with('error', 'Algo Salio mal.');
        }

        $fechaNa = $request['fechaNa'];
        $ano = Carbon::createFromDate($fechaNa)->age;
        if($ano < 22){
            return back()->with('error', 'Debes tener más de 22 años para registrarte. ');
        }

        $data = request()->validate([
            'name' => 'required|max:150',
            'apePat' => 'required|max:150',
            'apeMat' => 'required|max:150',
            'apodo' => 'required|unique:user,username|max:150',
            'img' => 'required|image|mimes:jpeg,png,jpg',
            'email' => 'required|unique:user,email|email|max:150',
            'password' => 'confirmed'
            
  
        ]);

          $rules = [
            'img' => 'required|image|mimes:jpeg,png,jpg',
            'genero' => 'required|max:1',
            'rol' => 'required|max:1',
            'fechaNa' => 'required',
            'genero' => 'required|max:1|in:M,F,O',
            'rol' => 'required|max:1|in:2,3',
            'password' => [
                'required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
                Password::min(8), 'max:50', 'string'],      
            "password_confirmation" => "required|min:8|max:50|same:password",
           
            
        ];
        $messages = [
            'img.required' => 'Agrega la imagen.',
            'img.mimes' => 'Solo se aceptan archivos con extensiones .jpeg, .png o .jpg.',
            'genero.in' => 'Algo salio mal con la selección del genero',
            'rol.in' => 'Algo salio mal con la selección del rol',
            'password.regex' => 'La contraseña debe tener números, mayúsculas, minúsculas y caracteres especiales.'
        ];
        $this->validate($request, $rules, $messages);

//fin de las validaciones 


        $usuario = new User();
        $usuario->nombre = $request['name'];
        $usuario->apePat = $request['apePat'];
        $usuario->apeMat = $request['apeMat'];
        $usuario->username = $request['apodo'];

        //subida de imagen 

        if($request->hasFile('img')){
            $foto = $request->file('img');
            $destinoPath = 'images/featureds/';
            $filename = time() . '-' . $foto->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinoPath, $filename);
            $usuario->foto = $destinoPath . $filename;
        }
        $usuario->email = $request['email'];
        if($rol == "2"){
            $usuario->status = "false";
        }else if($rol == "3"){
            $usuario->status = "true";
        }else{
            
            return back()->with('error', 'Algo salio mal');
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
