
<div class="modal fade in" id="historial"  >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 clas="modal-title"  id="myModalLabel">@{{"Nombre: "+usuario.nombre +" "+ usuario.apellido_paterno+" "+ usuario.apellido_materno}}</h5>

        <h5 >@{{"Usuario: "+ usuario.username }}</h5>
      </div>

      <div class="modal-body">
        <pre>
          @{{ $data }}
        </pre>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
