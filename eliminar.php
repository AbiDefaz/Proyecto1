<?php
$servidor="localhost";
$usuario="Examen";
$clave="123456";
$base="instituto";
$tabla="estudiantes";

$nombre=$_POST['nombre'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");

mysqli_query($conexion,"DELETE from estudiantes where nombre='$nombre'") or die ("error al bucar");
mysqli_close($conexion);
echo("LOS DATOS SE HAN ELIMINADO EXITOSAMENTE");
?>