<?php

include("conexion.php");
$con=conectar();

$cod_juego=$_GET['id'];

$sql="DELETE FROM juego  WHERE cod_juego='$cod_juego'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: juego.php");
    }
?>
