<?php
include("conexion.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$fe_nac = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];

$sql = "INSERT INTO personas(nombre, apellido, direccion, fecha_nacimiento, sexo, telefono) 
VALUES('$nombre', '$apellido', '$direccion', '$fe_nac', '$sexo', $telefono)";

mysqli_query($con,$sql);

?>

<p>Se registro corectamente</p>
<meta http-equiv="refresh" content="2;url=listar.php">