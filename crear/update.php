<?php

include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$$nombre_pro=$_POST['nombre_pro'];
$descripcion=$_POST['descripcion'];
$unidades=$_POST['unidades'];

$sql="UPDATE productos SET nombre_pro='$$nombre_pro',descripcion='$descripcion',unidades='$unidades' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    header("location: crearProducto.php");
}

?>