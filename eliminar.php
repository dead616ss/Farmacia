<?php

include "conexion2.php";
$id=$_POST["Id"];

$sql=" Delete FROM  datos_productos WHERE Id_Producto='$id'";
$resultado=mysql_query($sql,$conexion);

if($resultado){
echo "Datos Eliminado correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);
?>