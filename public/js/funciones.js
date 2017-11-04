function alerta(id)
{

  $('#historial').modal('show');
  document.getElementById('id_usuario').value=id;
  document.getElementById("id_usuario").click();
}

Vue.component('data-table', {
  template: '<table class="display" ></table>',

  props: ['users'],
  data() {
    return {
      headers: [
        { title: 'OPCIONES' },
        { title: 'ID'  },
        { title: 'USUARIO' },
        { title: 'NOMBRE'},
        { title: 'APELLIDO PATERNO' },
        { title: 'APELLIDO MATERNO'  },
        { title: 'ADMINISTRATIVO' },
        { title: 'SUCURSAL' , class: 'some-special-class sorting' },
      ],
      rows: [] ,
      dtHandle: null
    }
  },
  watch: {
    users(val, oldVal) {
      let vm = this;
      vm.rows = [];
      // You should _probably_ check that this is changed data... but we'll skip that for this example.
      val.forEach(function (item) {
        // Fish out the specific column data for each item in your data set and push it to the appropriate place.
        // Basically we're just building a multi-dimensional array here. If the data is _already_ in the right format you could
        // skip this loop...
        let row = [];
        row.push("<a href='#' class='' title='Ver Elemento'  onclick='"+"alerta("+item.id+")'"+" ><i class='material-icons'>visibility</i></a>"+
          "&nbsp;<span><a href='#' class='link'><i class='material-icons'>face</i></a></span>&nbsp;"+
          "<span><a href='#' class='link'><i class='material-icons'>delete</i></a></span>"
        );
        row.push(item.id);
        row.push(item.username);
        row.push(item.nombre);
        row.push(item.apellido_paterno);
        row.push(item.apellido_materno);
        row.push(item.administrativo);
        row.push(item.nombre_sucursal);
        vm.rows.push(row);
      });

      // Here's the magic to keeping the DataTable in sync.
      // It must be cleared, new rows added, then redrawn!
      vm.dtHandle.clear();
      vm.dtHandle.rows.add(vm.rows);
      vm.dtHandle.draw();
    },

    prueba(val, oldVal) {

    }
  },
  methods:{
  },
  mounted() {
    let vm = this;
    // Instantiate the datatable and store the reference to the instance in our dtHandle element.
    vm.dtHandle = $(this.$el).DataTable({
      // Specify whatever options you want, at a minimum these:

      columns: vm.headers,
      data: vm.rows,
      searching: false,
      paging: true,
      info: true,
          language: {
        paginate: {
                first:    'Inicio',
                previous: 'Anterior',
                next:     'Siguiente',
                last:     'Ultimo'
        },

        emptyTable: "Sin resultados",
        //sLengthMenu: "Mostrar _MENU_",
        info: "Mostrando pagina _PAGE_ de _PAGES_",
        sLengthMenu: 'Mostrar <select>'+
      '<option value="10">10</option>'+
      '<option value="25">25</option>'+
      '<option value="50">50</option>'+
      '<option value="100">100</option>'+
      '<option value="-1">Todos</option>'+
      '</select>',
       infoEmpty: "",
       infoFiltered: " - filtered from _MAX_ records"
    }

    });

  }
});

new Vue({
  el: '#tabledemo',
  created:function(){

      this.getSucursales();
  },
  data: {
    users: [],
    delegaciones:['omar','zarate'],
    search: '',
    searchUsuario:{'username':'','nombre':'','paterno':'','materno':''},
    usuario:'',
    prueba:''
  },
  methods:{

    mostrarUsuario:function()
    {
      alert("hola");
      /*
    var url='/administrador/usuario/show';

    axios.post(url,{
        usuario:id//new keep es e input
    }).then(response=>{
    //  alert(response.data.nombre);
      // this.usuarios=[];
      this.usuario=response.data;
      this.errors=[];//listado de errores

    }).catch(error=>{
      this.errors=error.response.data
    });
    */
},
  traerDelegaciones: function(){
    alert("oma");
  },

  historialUsuario:function()
  {

    var url='/administrador/usuario/search';
    axios.post(url,{
        usuario:this.searchUsuario//new keep es e input
    }).then(response=>{
    //  alert(response.data.nombre);
     // this.usuarios=[];
      this.users=response.data;
      this.errors=[];//listado de errores
      //alert(response.data);
      this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''};
        toastr.success('Busqueda exitosa');//mensaje

    }).catch(error=>{
      this.errors=error.response.data

    });
  },
    busquedaUsuario:function()
    {

    var url='/administrador/usuario/search';

    axios.post(url,{
        usuario:this.searchUsuario//new keep es e input
    }).then(response=>{
    //  alert(response.data.nombre);
      // this.usuarios=[];
      this.users=response.data;
      this.errors=[];//listado de errores
      //alert(response.data);
      this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''};
        toastr.success('Busqueda exitosa');//mensaje

    }).catch(error=>{
      this.errors=error.response.data

    });
  },
  pruebar:function()
  {
    this.prueba=document.getElementById('id_usuario').value;
  }

},//end metodos
  computed: {
    filteredUsers: function () {
      let self = this
      let search = self.search.toLowerCase()
      return self.users.filter(function (user) {
        return  user.username.toLowerCase().indexOf(search) !== -1 ||
          user.nombre.toLowerCase().indexOf(search) !== -1 ||
          user.apellido_paterno.toLowerCase().indexOf(search) !== -1 ||
          user.apellido_materno.toLowerCase().indexOf(search) !== -1 ||
          user.nombre_sucursal.toLowerCase().indexOf(search) !== -1
      })
    },

  },
  mounted() {
    let vm = this;
        vm.users = [];
  }
});
