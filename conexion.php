<?php
$servidor="localhost";
$usuario="Examen";
$clave="123456";
$base="instituto";
$tabla="estudiantes";


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];



$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");
$insertar=" insert into estudiantes values('$nombre','$apellidos','$correo')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("LOS DATOS SE HAN GUARDADO EXITOSAMENTE");
?>


