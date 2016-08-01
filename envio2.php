<?php
include"conexion2.php";
$sql= "SELECT*FROM datos_productos";
$resp=mysql_query($sql,$conexion);
$datos=array();
$i=0;
if($resp){
while($fila=mysql_fetch_assoc($resp)){
//echo "Id:".$fila['Id_Estudiante']." ";
//echo "Nombre: ".$fila['Nombre']." ";
//echo "Edad: ".$fila['Edad']." ";
//echo "Promedio: ".$fila['Promedio']."<br>";
$datos[$i]=$fila;
$i=$i+1;
}
}else{
echo "Error al consultar lo datos:".mysql_error();
}
mysql_close($conexion);
echo json_encode($datos);
?>