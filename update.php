<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];
$img=$_POST['img'];

$sql="CALL update_game('$id', '$nombre', '$genero', '$precio', '$descripcion', '$img')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: games.php");
    }
?>