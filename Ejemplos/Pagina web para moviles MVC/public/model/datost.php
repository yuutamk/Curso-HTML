<?php
$host="merakumc.260mb.net";
$usuario="n260m_16438759";
$contrasena="bobespon";

$base="n260m_16438759_Agenda";

$enlace=mysql_connect($host,$usuario,$contrasena);
mysql_select_db($base,$enlace);

$clave=$_POST['clave'];

$nombre=$_POST['nombre'];

$calle=$_POST['calle'];

$colonia=$_POST['colonia'];

$delegacion=$_POST['delegacion'];

$telefono=$_POST['telefono'];

$celular=$_POST['celular'];

$consulta="insert into alumnos(calve,nombre,calle,colonia,delegacion,telefono,celular)
values('".$clave."','".$nombre."','".$calle."','".$colonia."','".$delegacion."','".$telefono."','".$celular."')";



$resultado=mysql_query($consulta,$enlace);

echo 'datos insertados';

?>
