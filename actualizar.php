<?php
include "conexion2.php";

  $id=$_POST["Id"];
  $nom=$_POST["producto"];
  $mar=$_POST["marca"];
  $mod=$_POST["modelo"];
  $pre=$_POST["precio"];

$sql=" UPDATE datos_productos SET  Producto='$nom', Marca='$mar',Modelo='$mod',Precio='$pre' WHERE Id_Producto='$Id'";
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