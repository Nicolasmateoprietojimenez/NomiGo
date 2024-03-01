<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Empleado</title>
</head>
<body>
    <h2>Formulario de Empleado</h2>
    <form action="../controlador/controladoRegistroEmpe.php" method="POST">
        <label for="id_empleado">ID Empleado:</label>
        <input type="text" id="id_empleado" name="id_empleado"><br><br>

        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento"><br><br>

        <label for="documento_fam">Documento Familiar:</label>
        <input type="text" id="documento_fam" name="documento_fam"><br><br>

        <label for="salario_base">Salario Base:</label>
        <input type="text" id="salario_base" name="salario_base"><br><br>

        <input type="submit" name="boton" value="Registrar Empleado">
    </form>
</body>
</html>
