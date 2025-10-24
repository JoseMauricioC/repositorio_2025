<?php
include("conexion.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$fe_nac = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion = $_POST['profesion_id'];

$sql = "INSERT INTO personas(nombre, apellido, direccion, fecha_nacimiento, sexo, telefono, profesion_id) 
VALUES('$nombre', '$apellido', '$direccion', '$fe_nac', '$sexo', $telefono, '$profesion')";

mysqli_query($con,$sql);

?>

<p>Se registro corectamente</p>
<meta http-equiv="refresh" content="2;url=listar.php">