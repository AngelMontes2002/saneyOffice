<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre_pro=$_POST['nombre_pro'];
$descripcion=$_POST['descripcion'];
$unidades=$_POST['unidades'];

$sql="INSERT INTO productos VALUES('$codigo','$unidades','$nombre_pro','$descripcion')";
$query=mysqli_query($con,$sql);

if($query){
    header("location: crearProducto.php");
}else{

}

?>
