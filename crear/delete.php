<?php

    include("conexion.php");
    $con=conectar();

    $codigo=$_GET['codigo'];

    $sql="DELETE FROM productos WHERE nombre_pro='$codigo'";
    $query=mysqli_query($con,$sql);

    if($query){
        header("location: crearProducto.php");
    }

?>
