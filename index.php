<?php
/*index.php bareBones
Descripción.
	-muestra las capas del MVC en un archivo
	-muestra como la perición URL es vía barra de direcciones
	-
*/
/* capa modelo<-->░BaseDeDatos░
01 define credenciales de acceso a una base de datos
*/
	$servername="localhost";
	$dbname="mvc";
	$username="root";
	$password="";

	$registros=array();
	$consulta="SELECT * FROM libros";

	$conexion=new mysqli($servername,$username,"",$dbname);
	$conexion->query("set names 'utf8'");
//
/*capa controlador*/
$consulta=$conexion->query($consulta);
	while($filas=$consulta->fetch_assoc())
	{
		$registros[]=$filas;
	}
?>
<!-- capa de vista -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libros</title>
</head>
<body>
	<h2> Libros </h2>
	<ul>
		<?php
			foreach ($registros as $atributos) {
			print "<li>".$atributos["titulo"].", ".$atributos["autor"]. ", ".$atributos["editorial"].      "</li>";
			}
		?>
	</ul>
</body>
</html>
