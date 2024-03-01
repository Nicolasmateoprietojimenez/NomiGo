<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
</head>

<body>
    <h2>Modificar Usuario</h2>
    <form action="../controlador/controladomodiusu.php" method="POST">
        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" ><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" ><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" ><br><br>

        <label for="lugar_nac">Lugar de Nacimiento:</label>
        <input type="text" id="lugar_nac" name="lugar_nac" ><br><br>

        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nac" name="fecha_nac" ><br><br>

        <label for="fecha_exp">Fecha de Expedición:</label>
        <input type="date" id="fecha_exp" name="fecha_exp" ><br><br>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" ><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" ><br><br>

        <label for="nombre_usu">Nombre de Usuario:</label>
        <input type="text" id="nombre_usu" name="nombre_usu" ><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" ><br><br>

        <input type="submit" name="boton" value="Modificar">
    </form>
</body>

</html>