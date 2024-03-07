<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>lista de usuarios</caption>
            <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Lugar de Nacimiento</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Entrada</th>
                <th>Género</th>
                <th>Correo</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($usuario as $key) {
                    echo "<tr><td>". $key->getDocumento() . "</td>";
                    echo "<td>". $key->getNombre() . "</td>";
                    echo "<td>". $key->getApellido() . "</td>";
                    echo "<td>". $key->getLugarN() . "</td>";
                    echo "<td>". $key->getFechaN() . "</td>";
                    echo "<td>". $key->getFechaE() . "</td>";
                    echo "<td>". $key->getGenero() . "</td>";
                    echo "<td>". $key->getCorreo() . "</td>";
                    echo "<td>". $key->getNombreU() . "</td>";
                    echo "<td>". $key->getContrasena() . "</td>";   
                    echo '<td><a href="controladomodiusu.php?id=' . $key->getDocumento() . '"">Editar</a></td>';
                    echo '<td><form action="controladoeliminarusu.php" method="POST" onsubmit="return confirm(\'¿Estás seguro de que quieres borrar este registro?\');">
                    <input type="hidden" name="id" value="' . $key->getDocumento() . '"><button type="submit" class="boton">Borrar</button></form></td></tr>';
                }?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>