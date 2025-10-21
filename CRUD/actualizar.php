<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
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
        <form action="editar_usuario.php" method="POST">
            <h1>Editar Usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="nombre" value="<?= $row['name'] ?>">
            <input type="text" name="lastname" placeholder="apellido" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="username" value="<?= $row['username'] ?>">
            <input type="text" name="password" placeholder="password" value="<?= $row['password'] ?>">
            <input type="text" name="email" placeholder="email" value="<?= $row['email'] ?>">

            <input type="submit" value="Actualizar">

        </form>
    </div>
</body>
</html>