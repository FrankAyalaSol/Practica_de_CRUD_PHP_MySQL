<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";

$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Usuario con PHP Y MySQL</title>
</head>
<body>
    <div>
        <form action="">
            <h1>Crear Usuario</h1>

            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Nombre de Usuario">
            <input type="text" name="password" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Correo Electrónico">

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre de Usuario</th>
                    <th>Contraseña</th>
                    <th>Correo Electrónico</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query)):?>
            <tr>
                <th> <?= $row['id'] ?> </th>
                <th> <?= $row['name'] ?> </th>
                <th> <?= $row['lastname'] ?> </th>
                <th> <?= $row['username'] ?> </th>
                <th> <?= $row['password'] ?> </th>
                <th> <?= $row['email'] ?> </th>
                <!-- ACCIONES -->
                <th><a href="">EDITAR</a></th>
                <th><a href="">ELIMINAR</a></th>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>