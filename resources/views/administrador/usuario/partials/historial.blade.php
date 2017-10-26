<div class="modal fade" id="historial">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4 align="center">HISTORIAL</h4>
          <br>


          <div class="row" v-for="usuario in users" v-if="usuario.id==prueba" >
            <div class="col-sm-10 col-sm-offset-1">
            <h5 >@{{"Nombre: "+usuario.nombre +" "+ usuario.apellido_paterno+" "+ usuario.apellido_materno}}</h5>

            <h5 >@{{"Usuario: "+ usuario.username }}</h5>
          </div>
          </div>
          <input id="id_usuario" type="hidden" v-model="activo"  @click="pruebar">
			</div>
			<div class="modal-body">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <table id="usuariosTabla" class="display"  width="100%" cellspacing="0">
                <thead>
                  <tr>

                    <th>FECHA</th>
                    <th>HISTORIAL</th>

                  </tr>
                </thead>

                <tbody>
                </tbody>
          </table>
        </div>
      </div>


      </div>
			<div class="modal-footer">
				<input type="button" class="btn btn-primary" value="CANCELAR">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>

       <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
 </div>
		</div>
	</div>
</div>
