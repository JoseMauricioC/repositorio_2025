<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexion.php');

    $id = $_GET['id'];
    $sql = "SELECT id, nombre, apellido, direccion, fecha_nacimiento, sexo,
    telefono FROM personas WHERE id='$id'";

    $consulta = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($consulta);
    ?>
    <div>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>">
        <br>
        Apellido: <input type="text" name="apellido" value="<?php echo $fila['apellido'] ?>">
        <br>
        Direccion: <input type="text" name="direccion" value="<?php echo $fila['direccion'] ?>">
        <br>
        Fecha de Nacimiento: <input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento'] ?>">
        <br>
        <input type="radio" name="sexo" value="M" <?php echo $fila['sexo']=='M'?'checked':'' ?>>Masculino
        <input type="radio" name="sexo" value="F" <?php echo $fila['sexo']=='F'?'checked':'' ?>>Femenino
        <br>
        Telefono: <input type="number" name="telefono" value="<?php echo $fila['telefono'] ?>">
        <br>
        Profesion: <input type="text" name="profesion_id">
        <br>
        <input type="submit" value="actualizar">
    </form>
    </div>
</body>
</html>