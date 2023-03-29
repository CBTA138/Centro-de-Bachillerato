<?php

include 'conexion_bd.php';

$nombreUsuario = $_POST['nombreUsuario'];
$clave = $_POST['clave'];

$query = "INSERT INTO datos(nombre, estudiante_visitante, email)
VALUES('$nombreUsuario', '$clave')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
	<script>
	alert("Se a registrado su aviso exitosamente")
	window.location = "../registro.php";
	</script>';
}else{
	echo '
<script>
	alert("No se a registrado su aviso, Intentalo nuevamente")
	window.location = "../registro.php";
	</script>';
	
}
mysqli_close($conexion);

?>