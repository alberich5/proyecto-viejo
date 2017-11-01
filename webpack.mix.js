let mix = require('laravel-mix');
 /*
		Archivos necesarios para que funcione perfectamente el login
  */
mix.scripts([
	'resources/assets/Omarjs/jquery.min.js',
	'resources/assets/Omarjs/bootstrap.min.js',
	'resources/assets/Omarjs/material.min.js',
	'resources/assets/Omarjs/nouislider.min.js',
	'resources/assets/Omarjs/bootstrap-datepicker.js',
	'resources/assets/Omarjs/material-kit.js',
], 'public/js/scriptLogin.js')

.styles([
	'resources/assets/Omarcss/icon.css',
	'resources/assetsOmarcss/css.css',
	'resources/assets/Omarcss/font-awesome.min.css',
	'resources/assets/Omarcss/bootstrap.min.css',
	'resources/assets/Omarcss/material-kit.css',
],'public/css/estiloLogin.css')
;

/*
	 Archivos necesarios para que funcione perfectamente el MENU
 */
 mix.scripts([
 	'resources/assets/Omarjs/jquery.min.js',
 	'resources/assets/Omarjs/bootstrap.min.js',
 	'resources/assets/Omarjs/material.min.js',
 	'resources/assets/Omarjs/nouislider.min.js',
 	'resources/assets/Omarjs/material-kit.js',
	'resources/assets/js/axios.js',
	'resources/assets/js/vue.js',
	'resources/assets/js/menu.js',
], 'public/js/scriptMenu.js')

 .styles([
 	'resources/assets/Omarcss/icon.css',
 	'resources/assetsOmarcss/css.css',
 	'resources/assets/Omarcss/font-awesome.min.css',
 	'resources/assets/Omarcss/bootstrap.min.css',
 	'resources/assets/Omarcss/material-kit.css',
],'public/css/estiloMenu.css')
 ;

 /*
 	 Archivos necesarios para que funcione perfectamente el LAYOUT DE ADMINISTRADOR
  */
  mix.scripts([
  	'resources/assets/Omarjs/jquery.min.js',
  	'resources/assets/Omarjs/bootstrap.min.js',
  	'resources/assets/Omarjs/material.min.js',
  	'resources/assets/Omarjs/nouislider.min.js',
  	'resources/assets/Omarjs/bootstrap-datepicker.js',
  	'resources/assets/Omarjs/material-kit.js',
 		'resources/assets/js/axios.js',
 		'resources/assets/js/vue.js',
 ], 'public/js/scriptAdministrador.js')

  .styles([
  	'resources/assets/Omarcss/icon.css',
  	'resources/assetsOmarcss/css.css',
  	'resources/assets/Omarcss/font-awesome.min.css',
  	'resources/assets/Omarcss/bootstrap.min.css',
  	'resources/assets/Omarcss/material-kit.css',
 ],'public/css/estiloAdministrador.css')
  ;
