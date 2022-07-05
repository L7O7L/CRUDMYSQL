<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="CALL eliminar_game($id)";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: games.php");
    }
?>
