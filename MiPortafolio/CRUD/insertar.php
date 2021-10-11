<?php
include("conexion.php");
$con=conectar();

$cod_juego=$_POST['cod_juego'];
$precio=$_POST['precio'];
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];


$sql="INSERT INTO juego VALUES('$cod_juego','$precio','$nombre','$genero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: juego.php");
    
}else {
}
?>