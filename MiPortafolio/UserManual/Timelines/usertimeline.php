<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Brayan Rodriguez - Portafolio</title>
		<!-- Link To CSS -->
		<link rel="stylesheet" href="timeline.css">
		<!-- Box Icons -->
		<link rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	
	</head>
<body>
 

<h1>MANUAL DE USUARIO</h1>
<br> 
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">INTRODUCCIÓN</div></li>
		<li class="step step02"><div class="step-inner">OBJETIVOS</div></li>
		<li class="step step03"><div class="step-inner">MEJORAR EL SISTEMA</div></li>
		<li class="step step04"><div class="step-inner">REQUERIMIENTOS</div></li>
		<li class="step step05"><div class="step-inner">NAVEGACIÓN</div></li>
	</ul>
	
	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
	<div class="section-content discovery active">
		<h2>INTRODUCCIÓN AL MANUAL DE USUARIO</h2>
		<p>En este apartado se explicaran las operaciones que se pueden realizar en la aplicación, el objetivo es que el usuario final de la aplicación comprenda de manera clara.</p>
	</div>
	
	<div class="section-content strategy">
		<h2>OBJETIVOS</h2>
		<p>Este documento tendra como objetivo guiar al usuario y mostrale la diferentes funcionalidades de la aplicación de manera óptima.</p>
	</div>
	
	<div class="section-content creative">
		<h2>REQUISITOS DE CONOCIMIENTO PARA MEJORAR EL SISTEMA</h2>
		<p>Se debe indicar si el usuario requiere o no conocimientos tecnicos: (Informática básica), (Sistemas Operativos), (Información de las políticas de la institución).
		</p>
	</div>
	
	<div class="section-content production">
		<h2>REQUERIMIENTOS HARDWARE Y SOFTWARE</h2>
		<p>Se debe indicar las especificaciones tecnicas del hardware y software para que este pueda funcionar correctamente.</p>
		<p>En el Hardware sencillamente se pueden indicar los requerimientos mínimos, en el Software, se debera especificar en que sistema operativo se esta trabajando, asi como tambien el gestor de Base de Datos.</p>
	</div>
	
	<div class="section-content analysis">
		<h2>ESTRUCTURAS DEL SOFTWARE Y REGLAS PARA NAVEGAR EN LA APLICACION</h2>
		<p>- Ingreso al Sistema: Explicar detalladamente elingreso al sistema, teniendo en cuenta la politica de seguridad de la información.</p>
		<p>- Interfaz Gráfica: Se debe representar todo lo referente a partados visuales del aplicativo como: mapa de navegacion, descripcion del miso, y descripcion detallada de formularios presentes.</p>
		<p>- Mapa de Navegación: Se debe mostrar detalladamente el mapa de navegacion con sus respectivos botones y funciones. Existe una estandarización en los botones del menú, por lo tanto debe contener un nombre, imagen y su función. </p>
		<p></p>
	</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$(".analysis").addClass("active").siblings().removeClass("active");
});

 
    </script>
</body>
</html>