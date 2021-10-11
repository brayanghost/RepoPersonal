<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Brayan Rodriguez - Portafolio</title>
		<!-- Link To CSS -->
		<link rel="stylesheet" href="timeline2.css">
		<!-- Box Icons -->
		<link rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	
	</head>
<body>
 

<h1>MANUAL TÉCNICO</h1>
<br> 
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">INTRODUCCIÓN</div></li>
		<li class="step step02"><div class="step-inner">OBJETIVOS</div></li>
		<li class="step step03"><div class="step-inner">CONTENIDO TÉCNICO</div></li>
		<li class="step step04"><div class="step-inner">MODELO LOGICO</div></li>
		<li class="step step05"><div class="step-inner">PLATAFORMA DE USUARIO</div></li>
	</ul>
	
	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
	<div class="section-content discovery active">
		<h2>INTRODUCCIÓN AL MANUAL TÉCNICO</h2>
		<p>Este manual va dirigido al área de soporte técnico de la organización, ya que se detallan aspectgos de la estructura del sistema entendiendo su funcionalidad y permitiendo el mantenimiento del mismo.</p>
	</div>
	
	<div class="section-content strategy">
		<h2>OBJETIVOS</h2>
		<p>En este apartado se debe describir el objetivos generales y especificos del sistema que se han cumplido en el sistema.</p>
	</div>
	
	<div class="section-content creative">
		<h2>CONTENIDO TÉCNICO</h2>
		<p>- Descripción de los Procesos: Se deben describir los procesos ba los cuales va apoyar el sistema de información, generaalmebte en el informe se incluye un capitulo con el mapa de procesos de la empresa </p>
		<p>- Diagramas UML: Se deben presentar los diagramas UML mas respresentativos como lo son: Casos de uso, clases, secuencias, etc.</p>
		<p>- Descripción de Campos Requeridos por Pantalla: Se debe explicar los campos que se utilizan en cada formulario anexando la presentación de cada una de las pantallas.</p>
		<p>- Mapa de Navegación: Se debe mostrar detalladamente el mapa de navegacion con sus respectivos botones y funciones. Existe una estandarización en los botones del menú, por lo tanto debe contener un nombre, imagen y su función. </p>
	</div>
	
	<div class="section-content production">
		<h2>MODELO LÓGICO DE DATOS, DIAGRAMA ENTIDAD-RELACIÓN </h2>
		<p>Se debe incluir el Diagramas Entidad-Relación y el diccionario de datos de la aplicación.</p>
		<p>En el Hardware sencillamente se pueden indicar los requerimientos mínimos, en el Software, se debera especificar en que sistema operativo se esta trabajando, asi como tambien el gestor de Base de Datos.</p>
	</div>
	
	<div class="section-content analysis">
		<h2>PLATAFORMA DE USUARIO</h2>
		<p>En este apartado se deben especificar las diferentes herramientas utlizadas para el desarrollo del sistema de información, entre ellas: El lenguaje de Programación, Sistema de Base de Datos, librerias, Pluggins y demas herramientas para el correcto funcionanmiento de este.</p>
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