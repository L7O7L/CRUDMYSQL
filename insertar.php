<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];
$img=$_POST['img'];


$sql="CALL agregar_juegos('$nombre','$genero', '$precio','$descripcion', '$img')";
$query= mysqli_query($con,$sql);

if($query){

    Header("Location: games.php");
    
}else {
}
?>