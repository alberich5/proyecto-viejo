<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sipab 2017</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--    Estilos para la plantilla de Administrador     -->
  <link rel="stylesheet" href="{{asset('css/estiloAdministrador.css')}}" />
	<link rel="stylesheet" href="{{asset('css/botonera.css')}}" />
    @yield('css')
</head>

<body class="index-page">

  @include('administrador.partials.navegacion')

   <div class="wrapper">
     <br><br>
     <div class="main main-raised" >
         <center><h1>Administrador</h1></center>
          @yield('content')
     </div>
  	</div>

</body>
	<!--   Archivos de javascript   -->
  <script src="{{asset('js/scriptAdministrador.js')}}" type="text/javascript"></script>
	@yield('js')
</html>
