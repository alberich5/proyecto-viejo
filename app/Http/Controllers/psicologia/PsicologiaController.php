<?php

namespace App\Http\Controllers\psicologia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\elemento_policial;
use App\Persona_fisica;
use App\Dato_personal;
use App\Sucursal;
use App\Sucursal_historico;


class PsicologiaController extends Controller
{


  public function home(){

    return view('Psicologia.plantillaPsicologia');
  }

  public function captura(){

    return view('Psicologia.curso.captura');
  }
   public function lista(){

    return view('Psicologia.curso.lista');
  }

  //Traer la informacio de Delegacion
   public function sucursal()
  {
      $sucursal = Sucursal::select('id','nombre')->get();
      return$sucursal;
  }

  //Traer la informacion de los elementos disponibles d elas Delegaciones
  public function buscarElementos(Request $request)
  {
      $delegacion = $request->get('delegacion');
    //$elemento= elemento_policial::select('id','version')->take(10)->get();
    $elemento = elemento_policial::join("persona_fisica","elemento_policial.id_persona_fisica","=","persona_fisica.id")
    ->join("dato_personal","elemento_policial.id","=","dato_personal.id")
    ->join("sucursal_historico","persona_fisica.id_dato_personal","=","sucursal_historico.id_elemento_policial")
    ->join("sucursal","sucursal_historico.id_sucursal","=","sucursal.id")
    ->select('elemento_policial.id','elemento_policial.status','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre as delegacion','dato_personal.rfc','dato_personal.curp')
    ->where('sucursal_historico.version','=', 0)
    //->where('elemento_policial.status','in', 'Candidato Contratado')
    ->where('sucursal.nombre','=', $delegacion)
    ->orderBy('id', 'ASC')->take(15)->get();


      $sucursal = Sucursal::select('id','nombre')->get();
      return $elemento;
  }
}
