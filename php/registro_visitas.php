<?php

include 'conexion_bd.php';

$nombre = $_POST['nombre'];
$estudiante_visitante = $_POST['estudiante_visitante'];
$email = $_POST['email'];

$query = "INSERT INTO datos(nombre, estudiante_visitante, email)
VALUES('$nombre', '$estudiante_visitante', '$email')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
	<script>
	alert("Se a registrado su visita exitosamente")
	window.location = "../registro.php";
	</script>';
}else{
	echo '
<script>
	alert("No se a registrado su visita, Intentalo nuevamente")
	window.location = "../registro.php";
	</script>';
	
}
mysqli_close($conexion);

?>