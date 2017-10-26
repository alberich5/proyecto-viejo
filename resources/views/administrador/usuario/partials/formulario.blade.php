<form method="POST" v-on:submit.prevent="busquedaUsuario">
  <div name="formulario busqueda" class="form-horizontal">

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class="input-group col-md-8 col-md-offset-1">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">account_circle</i>
                </span>
                <input id="username" type="username" class="form-control" name="username" value="" autofocus placeholder="Nombre de usuario" aria-describedby="basic-addon1"  v-model="searchUsuario.username">
           </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6  form-group ">
            <div class=" input-group col-md-8 col-md-offset-1">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="nombre" type="nombre" class="form-control" name="nombre" value=""  autofocus placeholder="Nombre" aria-describedby="basic-addon1" style="text-transform:uppercase;" v-model="searchUsuario.nombre" >
           </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6  form-group ">
            <div class=" input-group col-md-8 col-md-offset-1">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="paterno" type="paterno" class="form-control" name="paterno" value=""  autofocus placeholder="Apellido paterno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.paterno">
           </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6 form-group ">
            <div class=" input-group col-md-8 col-md-offset-1">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="materno" type="materno" class="form-control" name="materno" value=""  autofocus placeholder="Apellido materno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.materno" >
           </div>
        </div>
    </div>

    <div class="row col-sm-offset-1">
            <input type="submit" class="btn btn-primary" value="BUSCAR">
    </div>

  </div>
</form>
