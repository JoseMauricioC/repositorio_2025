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
        $sql = "SELECT id, profesion FROM profesiones";
        $resultado = mysqli_query($con, $sql);
    ?>
    <div>
        <form action="insertar.php" method="POST">
        Nombre: <input type="text" name="nombre">
        <br>
        Apellido: <input type="text" name="apellido">
        <br>
        Direccion: <input type="text" name="direccion">
        <br>
        Fecha de Nacimiento: <input type="date" name="fecha_nacimiento">
        <br>
        <input type="radio" name="sexo" value="M">Masculino
        <input type="radio" name="sexo" value="F">Femenino
        <br>
        Telefono: <input type="number" name="telefono">
        <br>
        Profesion:<select name="profesion_id">
            <?php while($fila = mysqli_fetch_array($resultado)) {?>
                <option value="<?php echo $fila['id']; ?>"><?php echo $fila['profesion']; ?></option>
            <?php  } ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
    </div>
</body>
</html>