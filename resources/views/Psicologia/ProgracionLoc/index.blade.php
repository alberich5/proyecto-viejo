@extends('Psicologia.layout')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('psicologia')

<div id="usuarioCRUD">
            <div class="row" >
              <div class="col-sm-10 col-sm-offset-1">
                  <!--      inicio Wizard container        -->
                  <div class="wizard-container">
                      <div class="card wizard-card" data-color="azul" id="wizard">
                          <div class="wizard-header">
                                    <h2>Usuarios</h2>
                          </div>
                    <form method="POST" v-on:submit.prevent="busquedaUsuario">
                      <div name="formulario busqueda" class="form-horizontal">

                        <div class="row">

                            <div class=" col-sm-6 form-group">

                                <div class="input-group col-md-8">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons md-18">account_circle</i>
                                    </span>

                                    <input id="username" type="username" class="form-control" name="username" value="" autofocus placeholder="Nombre de usuario" aria-describedby="basic-addon1" style="text-transform:uppercase;" v-model="searchUsuario.username">

                               </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class=" col-sm-6 form-group">

                                <div class=" input-group col-md-8">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons md-18">person</i>
                                    </span>

                                    <input id="nombre" type="nombre" class="form-control" name="nombre" value=""  autofocus placeholder="Nombre" aria-describedby="basic-addon1" style="text-transform:uppercase;" v-model="searchUsuario.nombre" >

                               </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class=" col-sm-6 form-group">

                                <div class=" input-group col-md-8">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons md-18">&nbsp; &nbsp;&nbsp;</i>
                                    </span>

                                    <input id="paterno" type="paterno" class="form-control" name="paterno" value=""  autofocus placeholder="Apellido paterno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.paterno">

                               </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class=" col-sm-6 form-group">

                                <div class=" input-group col-md-8">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons md-18">&nbsp; &nbsp;&nbsp;</i>
                                    </span>

                                    <input id="materno" type="materno" class="form-control" name="materno" value=""  autofocus placeholder="Apellido materno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.materno" >

                               </div>
                            </div>
                        </div>




                        <div class="row col-sm-offset-1">


                                <input type="submit" class="btn btn-primary" value="BUSCAR">


                        </div>


                      </div><!--      FORM BUSQ      -->
                      </form>




                      <!--      tabla usuarios      -->
                      <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th >OPCIONES</th>
                                <th>ID</th>
                                <th>FOTOGRAFIA</th>
                                <th>NOMBRE</th>
                                <th>RFC</th>
                                <th>GENERO</th>
                                <th>DOMICILIO</th>
                                <th>fECHA NA.</th>
                                <th>DELEGACION</th>
                              </tr>
                            </thead>


                            <tbody>
                              <tr v-for="usuario in usuarios">
                                <td>
                                <a href="#" class="btm btn-info btn-sm" v-on:click.prevent="editKeep(keep)">1</a>
                                 <a href="#" class="btm btn-info btn-sm" v-on:click.prevent="deleteKeep(keep)">2</a>

                                <a href="#" class="btm btn-info btn-sm" v-on:click.prevent="deleteKeep(keep)">3</a>

                                </td>
                                <td >@{{usuario.id}}</td>
                                <td><img src="https://i.ytimg.com/vi/E1UjJI2kDfk/mqdefault.jpg" height="20%" width="60%"/></td>
                                <td>@{{usuario.username}}</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO PATERNO</td>
                                <td>APELLIDO PATERNO</td>


                              </tr>
                            </tbody>
                      </table>


                      <!-- FIN DEL TAB PARA LOS CONTENIDOS -->


                  </div>
                </div> <!-- fin del wizard container -->
              </div>
          </div> <!-- row -->


 <!-- pruebas -->
         <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
          </div>
<!-- fin de pruebas -->



</div>

@endsection
@section('js')
<script>
new Vue({
    //id asignado al div en el que funcionara vue
    el: '#usuarioCRUD',
    //funcion al crear el objeto
    created:function(){

        this.getUsuarios();
        //llamada al metodo
    },


    data:{

        errors:[],
        usuarios:[],
        searchUsuario:{'username':'','nombre':'','paterno':'','materno':''},
        sucursales:[]
            },
    methods:{
            getUsuarios:function () {
            var url='/administrador/usuarios';
            //variable que hace referencia a la URI de la ruta
            axios.get(url).then(response=>{
            this.usuarios=response.data;

            });

        },

            busquedaUsuario:function()
            {
            var url='/administrador/usuario/search';
            axios.post(url,{
                usuario:this.searchUsuario//new keep es e input
            }).then(response=>{
              this.usuarios=response.data;
              this.errors=[];//listado de errores
              this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''}
                toastr.success('Busqueda exitosa');//mensaje
               alert(response.data);
            }).catch(error=>{
              this.errors=error.response.data

            });

        },

}});
</script>
@endsection
