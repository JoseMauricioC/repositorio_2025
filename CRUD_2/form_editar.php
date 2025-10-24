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
    telefono, profesion_id FROM personas WHERE id='$id'";

    $consulta = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($consulta);

    $sql2 = "SELECT id, profesion FROM profesiones";
    $resultado = mysqli_query($con, $sql2);
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
        Profesion:<select name="profesion_id">
            <?php while($fila2 = mysqli_fetch_array($resultado)) {?>
                <option value="<?php echo $fila2['id']; ?>"
                 <?php if($fila2['id']==$fila['profesion_id']){
                    echo 'selected';
                 } ?>>
                <?php echo $fila2['profesion']; ?></option>
            <?php  } ?>
        </select>
        <br>
        <input type="submit" value="actualizar">
    </form>
    </div>
</body>
</html>