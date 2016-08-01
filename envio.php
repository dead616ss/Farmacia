 <?php
include "conexion2.php";

$nom=$_POST["nombre"];
$edad=$_POST["edad"]; 
$prom=$_POST["promedio"]; 

$sql="INSERT INTO datos_generales (Id_Estudiante,Nombre,Edad,Promedio)VALUES('','$nom','$edad','$prom')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
echo "Nombre: ".$nom."<br>";
echo "Edad: ".$edad."<br>";
echo "Promedio: ".$prom."<br>";
echo "Datos guardados correctamente";
}else{

echo "error no se pudieron guardar los datos".mysql_error();
}
mysql_close($conexion);

?>
 