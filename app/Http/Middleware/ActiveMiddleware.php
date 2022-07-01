<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Models\UsuarioRol;
use App\Models\User;

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
              return redirect('/inicioAdmin');
            } else if($rol->role_id == 2) {
                return redirect('/inicioStripper');
            }else{
             // $idStrippers = UsuarioRol::where('role_id','2')->get();
              //$users=\DB::table('model_has_roles')->select('model_id')->where('role_id','2');
             //$ids = $idStrippers;
              ////dd($users);
              //$strippers = User::where('id',$users)->get();
                return redirect('/inicioUser');
            }
          } else {
            Auth::logout();
            session()->flash('cuenta_baja', 'Todavía no has sido aceptado por el administrador.');
            return redirect('/login');
          }
    }
}
