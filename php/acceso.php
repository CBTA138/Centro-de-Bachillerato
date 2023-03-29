<?php
session_start();
?>
<?php
$nombreUsuario=$_POST['nombreUsuario'];
$clave=$_POST['clave'];
include 'conexion_bd.php';

$sql = "SELECT * FROM usuarios where nombreUsuario='$nombreUsuario' and clave='$clave'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_array();
	$_SESSION['admin']="admin";
	header("Location: ../admin/index.php");
}
else{
	echo "<script>alert('Usuario no encontrado');</script>";
	echo "<script>window.location.href='../login.php'</script>";
}
?>