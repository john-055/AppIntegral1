<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Models\UsuarioRol;
use App\Models\User;
use App\Models\Foto;
use App\Models\Stripper;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status == "true") {

            $rol = UsuarioRol::where('model_id', Auth::user()->id)->first();

            if ($rol->role_id == 1) {

              $totalStripers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
              ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
              ->where("model_has_roles.role_id", "=", "2")
              ->where("User.status", "=", "false")
              ->count();

              
              return response()->view('components.administrador.incioAdmin', compact('totalStripers'));
            } else if($rol->role_id == 2) {

              $stripper = Stripper::where("idUsuario", \Auth::user()->id)->first();
              $fotos = Foto::where('idStripper', $stripper->idStripper)->get();
              return response()->view('components.stripper.inicioStripper', compact('fotos'));
           
            }else{
              $strippers = User::join("model_has_roles", "model_has_roles.model_id", "=", "User.id")
                  ->select("user.id", "user.nombre", "user.apePat", "user.apeMat", "user.username", "user.email", "user.foto", "user.status", "user.genero")
                  ->where("model_has_roles.role_id", "=", "2")
                  ->where("User.status", "=", "true")
                  ->get();




                  return response()->view('components.usuario.inicioUser', compact('strippers'));
            }
          } else {
            Auth::logout();
            session()->flash('cuenta_baja', 'Todavía no has sido aceptado por el administrador.');
            return redirect('/login');
          }
    }
}
