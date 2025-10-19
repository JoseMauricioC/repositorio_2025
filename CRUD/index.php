<?php
include ("connection.php");

$con = connection();

$sql = "SELECT *FROM usuarios";
$query = mysqli_query($con, $sql);
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
        <form action="insertar.php", method="POST">
            <h1>Crear Usuario</h1>

            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="Email">

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <div>
        <h1>Usuarios Registrados</h1>

        <table border='1'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?= $row["id"] ?></th>
                <th><?= $row["name"] ?></th>
                <th><?= $row["lastname"] ?></th>
                <th><?= $row["username"] ?></th>
                <th><?= $row["password"] ?></th>
                <th><?= $row["email"] ?></th>

                <th><a href="">Editar</a></th>
                <th><a href="">Eliminar</a></th>
            </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>