<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;
use App\User;
use App\Elemento_policial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

        /**
    *Controlador del menu
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function __construct()
    {
      //  $this->middleware('cerrar');
  
        $this->middleware('auth');
    }

    public function getUsuarios() {

       //  $usuarios = User::find(Auth::user()->id);
      //$usuarios= User::all();
        $usuarios=User::leftjoin('persona_fisica', 'usuario.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('dato_personal', 'persona_fisica.id_dato_personal', '=', 'dato_personal.id')
        ->leftjoin('elemento_policial', 'elemento_policial.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('sucursal_historico', 'elemento_policial.id', '=', 'sucursal_historico.id_elemento_policial')
        ->leftjoin('sucursal', 'sucursal.id', '=', 'sucursal_historico.id_sucursal')

        ->where('sucursal_historico.version','0') //quitar cuando ya esten llenas las tablas

      

        ->select('usuario.id','usuario.username','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre as nombre_sucursal','elemento_policial.administrativo')

        //'dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre_sucursal','elemento_policial.administrativo
        ->get();
        return $usuarios;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                //return view('home');
        return view('administrador.usuario.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario
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
    public function show(Request $request)
    {
        $usuario=User::leftjoin('persona_fisica', 'usuario.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('dato_personal', 'persona_fisica.id_dato_personal', '=', 'dato_personal.id')
        ->leftjoin('elemento_policial', 'elemento_policial.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('sucursal_historico', 'elemento_policial.id', '=', 'sucursal_historico.id_elemento_policial')
        ->leftjoin('sucursal', 'sucursal.id', '=', 'sucursal_historico.id_sucursal')

        ->where('sucursal_historico.version','0') //quitar cuando ya esten llenas las tablas


        ->where('usuario.id','=',$request['usuario']['id'])
        
      

        ->select('usuario.id','usuario.username','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre as nombre_sucursal','elemento_policial.administrativo')

        //'dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre_sucursal','elemento_policial.administrativo
        ->get();
        return $usuario;
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
        $usuario=User::findOrFail($id);
        return $usuario;

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
        //No se elimina solo se desactiva la cuenta
        $usuario=User::findOrFail($id);
        $usuario->bloqueado='true';
        $usuario->save();
       
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchUsuario(Request $request)
    {

    //   return $request['usuario']['nombre'];
      

        
        $usuario=User::leftjoin('persona_fisica', 'usuario.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('dato_personal', 'persona_fisica.id_dato_personal', '=', 'dato_personal.id')
        ->leftjoin('elemento_policial', 'elemento_policial.id_persona_fisica', '=', 'persona_fisica.id')
        ->leftjoin('sucursal_historico', 'elemento_policial.id', '=', 'sucursal_historico.id_elemento_policial')
        ->leftjoin('sucursal', 'sucursal.id', '=', 'sucursal_historico.id_sucursal')

        ->where('sucursal_historico.version','0') //quitar cuando ya esten llenas las tablas


        ->where('usuario.username','like','%'.$request['usuario']['username'].'%')
        ->where('dato_personal.nombre','like','%'.strtoupper($request['usuario']['nombre']).'%')
        ->where('dato_personal.apellido_paterno','like','%'.strtoupper($request['usuario']['paterno']).'%')
        ->where('dato_personal.apellido_materno','like','%'.strtoupper($request['usuario']['materno']).'%')
      

        ->select('usuario.id','usuario.username','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre as nombre_sucursal','elemento_policial.administrativo')

        //'dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre_sucursal','elemento_policial.administrativo
        ->get();

        //dd($usuario);
      

    return $usuario;





        
    }
}
