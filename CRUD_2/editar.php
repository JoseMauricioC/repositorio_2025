<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$fe_nac = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion = $_POST['profesion_id'];

$sql = "UPDATE personas SET nombre='$nombre', apellido='$apellido', direccion='$direccion', fecha_nacimiento='$fe_nac', 
sexo='$sexo', telefono=$telefono, profesion_id='$profesion' WHERE id=$id";

//echo $sql;

mysqli_query($con,$sql);

?>

<p>Se actualizo corectamente</p>
<meta http-equiv="refresh" content="2;url=listar.php">