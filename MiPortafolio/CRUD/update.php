<?php

include("conexion.php");
$con=conectar();

$cod_juego=$_POST['cod_juego'];
$precio=$_POST['precio'];
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];

$sql="UPDATE juego SET  precio='$precio',nombre='$nombre',genero='$genero' WHERE cod_juego='$cod_juego'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: juego.php");
    }
?>