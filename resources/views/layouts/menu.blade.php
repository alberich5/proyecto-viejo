<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sipab 2017</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Estilos de la pagina de Menu     -->
    <link rel="stylesheet" href="{{asset('css/estiloMenu.css')}}" />
</head>
<body class="profile-page">
	<!--     navegacion de la pagina     -->
	@include('layouts.partials.navegacionmenu')

    <div class="wrapper">
			<div class="header header-filter" style="background-image: url('{{asset('img/policia.jpg')}}');"></div>
			<!--     Contenedor     -->
			@yield('menu')
		</div>

</body>
<script src="{{asset('js/scriptMenu.js')}}" type="text/javascript"></script>
</html>
