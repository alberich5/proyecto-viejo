<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UsuarioAccion;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
public function verificarPermiso($accion)
{
	 $usuario = User::find(Auth::user()->id);
	 $acc=UsuarioAccion::where('id_accion','=',$accion)
	 ->where('id_usuario','=',$usuario->id)
	 ->first();

		 if($acc==null)
		 {
		 	 return false;
		 }
		 else
		 {
		 	return true;
		 }
}





}
