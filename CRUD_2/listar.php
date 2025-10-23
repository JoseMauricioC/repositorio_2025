<?php
include('conexion.php');

$sql = "SELECT p.id, p.nombre, p.apellido, p.direccion, p.fecha_nacimiento, p.sexo,
p.telefono, f.profesion FROM personas p LEFT JOIN profesiones f ON f.id = p.profesion_id";

$consulta = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Personas</h1>
        <table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Profesion</th>
                <th>Acciones</th>
            </tr>
            <?php while($fila=mysqli_fetch_array($consulta)) {?>
            <tr>
                <td><?php echo $fila["nombre"];?></td>
                <td><?php echo $fila["apellido"];?></td>
                <td><?php echo $fila["direccion"];?></td>
                <td><?php echo $fila["fecha_nacimiento"];?></td>
                <td><?php echo $fila["sexo"];?></td>
                <td><?php echo $fila["telefono"];?></td>
                <td><?php echo $fila["profesion"];?></td>
                <td><a href="form_editar.php?id=<?php echo $fila['id'] ?>">Editar</a> <a href="eliminar.php?id=<?php echo $fila["id"] ?>">Eliminar</a></td>
            </tr>
            <?php    } ?>
        </table>

        <a href="form_registrar.html">Registrar Nuevo</a>
    </div>
</body>
</html>