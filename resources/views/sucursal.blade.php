
<form method="POST" v-on:submit.prevent="setSucursal(sucursal.id)">
	<div class="modal fade" id="sucursal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Seleccionar Sucursal</h4>
      </div>
      <div class="modal-body">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th colspan="1"></th>

							<th colspan="1">

							</th>
						</tr>
					</thead>


					<tbody>
						<td>
							<select required v-model="sucursal">
		  					<option v-for="sucursal in sucursales" v-bind:value="sucursal">
		    					@{{ sucursal.nombre }}
		  					</option>
							</select>
						</td>
							<td width="10px">
								<input type="submit" class="btn btn-primary" value="Seleccionar">
							</td>


					</tbody>
				</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-simple">Save</button>
      </div>
    </div>
  </div>
</div>

</form>
