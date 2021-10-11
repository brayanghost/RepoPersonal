<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">JavaScript / Ejercicios</div>
      <ul>
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="/MiPortafolio/index.php">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">ARREGLOS</span></a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">FUNCIONES</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">POO</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">MAS</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    <div class="item">
      
    </div>
    <div class="item">

    <div class="item">
<pre> 

<p>FUNCIONES Y FUNCIONES FLECHA:</p>
  
var vec1 = [];
var vec = new Array();

vec.push(100); //insertar un dato en el arreglo

vec.push("hola");


vec = new Array();
llenarVector(vec, 5);
console.log(vec);
console.log(sumaPares(vec));
console.log(sumaVector(vec));
console.log(restaVector(vec));
console.log(promedioVector(vec));
console.log(mayorVector(vec));
console.log(menorVector(vec));



//hoisting
function llenarVector(vector, tam) {
  for (let i = 0; i < tam; i++) {
    vector.push(Math.round(Math.random() * 100));
  }
  return vector;
}

var llenar = (vector, tam) => {
  for (let i = 0; i < tam; i++) {
    vector.push(Math.round(Math.random() * 100));
  }
  return vector;
}


function sumaPares(vector) {
  suma = 0;
  for (let i = 0; i < vector.length; i++) {
    if (vector[i] % 2 == 0) {
      suma += vector[i];
    }
  }
  return suma;
}


function sumaVector(vector) {
    sumas = 0;
    for (let i = 0; i < vector.length; i++) {
      
        sumas = sumas + vector[i];
    }
    return sumas;
  }



function restaVector(vector) {
    resta = 0;
    for (let i = 0; i < vector.length; i++) {
      
        resta = resta - vector[i];
    }
    return resta;
  }


function promedioVector(vector){
    sumaprom=0;
    for (let i=0; i < vector.length ; i++) { 
        sumaprom+=vector[i];
    }
    var promedio = sumaprom / vector.length;

    return promedio;
 }


function mayorVector(vector){
    mayor=0;
    for (let i=0; i < vector.length ; i++) { 
        if (vector[i]>mayor) 
        mayor=vector[i];{
        }
    }

    return mayor;
 }

 function menorVector(vector){
    menor=10000;
    for (let i=0; i < vector.length ; i++) { 
        if (vector[i]<menor) 
        menor=vector[i];{
        }
    }

    return menor;
 }

</pre> 

<p>CLASES SEGUN PROYECTO: </p>

<pre>

class Juego{
    constructor(nombre,categoria){
        this._nombre=nombre;
        this._categoria=categoria;
    }
    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }

    get categoria(){
        return this._categoria;
    }

    set categoria(categoria){
        this._categoria=categoria;
    }
}

class Juego extends Stock{
    constructor(nombre,categoria,disponibilidad,cantidad){
        super(nombre,categoria);
        this._disponibilidad=disponibilidad;
        this._cantidad=cantidad;
    }
    get dis_disponibilidad(){
        return this._disponibilidad;
    }
    set ficha(_ficha){
        this._ficha=ficha;
    }
}
</pre>

<p>EJERCICIO CREACION DE CLASES JS:</p>

<pre>
class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }

    get apellido(){
        return this._apellido; 
    }

    nombreCompleto(){
        return this._nombre+ ' '+this._apellido;
    }

}

class Aprendiz extends Persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }
    get programa(){
        return this._programa;
    }
    set ficha(_ficha){
        this._ficha=ficha;
    }
}

var ap=new Aprendiz('Javier','Rodrigo','ADSO','2142345')

const per=new Persona('Angela','Lopez');
console.log(per.nombreCompleto());
console.log(per.apellido);
per.apellido='Sanchez';
console.log(per.nombreCompleto());
console.log(per.apellido);  
</pre>
 
    </div>
    <div class="item">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
    </div>
  </div>
</div>
	
</body>
</html>