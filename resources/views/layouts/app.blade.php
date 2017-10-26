<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sipab 2017</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Estilos necesarios para que funcione perfectamente la plantilla de login     -->
	<link rel="stylesheet" href="{{asset('css/estiloLogin.css')}}" />
</head>
<body class="signup-page">
    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<!--Aqui va todo el contenido que se va a mostrar y que se va a centrar-->
            @yield('content')

						</div>
					</div>
				</div>
			</div>
    </div>
</body>
	<!--   Estos son los scripts necesarios que funcione correctamente la aplicacion   -->
<script src="{{asset('js/scriptLogin.js')}}" type="text/javascript"></script>
</html>
