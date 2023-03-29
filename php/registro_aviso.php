<?php

include 'conexion_bd.php';

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO avisos(titulo,descripcion)
VALUES('$titulo','$descripcion')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
	<script>
	alert("Se a registrado su aviso exitosamente")
	window.location = "../avisos.php";
	</script>';
}else{
	echo '
<script>
	alert("No se a registrado su aviso, Intentalo nuevamente")
	window.location = "../avisos.php";
	</script>';
	
}
mysqli_close($conexion);

?>