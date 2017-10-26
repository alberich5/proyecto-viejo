@extends('administrador.layout')

@section('css')
<link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- Inicio del body del panel -->+
  <div class="row" >
    <div class="col-sm-10 col-sm-offset-1">
      <div class="wizard-container">
        <div class="card wizard-card" data-color="azul" id="wizard">
          <div class="wizard-header">
            <h2>Psicologia</h2>
          </div>

            <div id="tabledemo" >

                <!--      Formulario de busqueda      -->
                @include('administrador.usuario.partials.formulario')
                <div style="padding: 10px;">
                  Buscar : <input v-model="search">
                  <hr>
                  <data-table :users="filteredUsers"></data-table>
                </div>


                <div class="row"  style="padding: 10px;">
                    <div class="col-xs-12">
                      <pre>@{{$data}}</pre>
                    </div>
                </div>
                @include('administrador.usuario.partials.historial')
            </div><!--      fin de la tabla demo      -->
        </div><!--fin fde card wizard-card-->
      </div> <!-- fin del wizard container -->
    </div><!--fin de col-sm-10 col-sm-offset-2-->
  </div> <!-- row -->

@endsection
@section('js')
<!-- INCLUYE LAS LIBRERIAS EXTERNAS DE JAVASCRIPT-->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/funciones.js') }}"></script>
@endsection
