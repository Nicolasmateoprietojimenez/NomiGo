<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Empleados</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>Lista de Empleados</caption>
            <thead>
            <tr>
                <th>ID Empleado</th>
                <th>Documento</th>
                <th>Documento Familiar</th>
                <th>Salario Base</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($empleados as $empleado) {
                    echo "<tr>";
                    echo "<td>". $empleado->getIdEmpleado() . "</td>";
                    echo "<td>". $empleado->getDocumento() . "</td>";
                    echo "<td>". $empleado->getDocumentoFam() . "</td>";
                    echo "<td>". $empleado->getSalarioBase() . "</td>";
                    echo "</tr>";          
                }
            ?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>
