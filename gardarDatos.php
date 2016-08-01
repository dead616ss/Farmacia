<?php

include "conexion2.php";

 $nom=$_POST["producto"];
  $mar=$_POST["marca"];
  $mod=$_POST["modelo"];
  $pre=$_POST["precio"];

$sql="INSERT INTO datos_productos(Id_Producto, Producto, Marca,Modelo,Precio )VALUES('','$nom','$mar','$mod','$pre')";
$resultado=mysql_query($sql,$conexion);

if($resultado){
echo "Producto: ".$nom;
echo "Marca: ".$mar;
echo "Modelo: ".$mod;
echo "Precio: ".$pre;
echo "Datos guardados correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);
?>