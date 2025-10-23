<?php 
include ('conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM personas WHERE id = '$id'";
$consulta = mysqli_query($con, $sql);
$con->close();
?>

<p>se elimino con exito</p>
<meta http-equiv="refresh" content="2;url=listar.php">