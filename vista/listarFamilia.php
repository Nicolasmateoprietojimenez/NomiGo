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
            <caption>Lista de Familiares</caption>
            <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>Parentezco</th>
                <th>Fecha de Nacimiento</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($familiares as $familiar) {
                    echo "<tr><td>". $familiar->getDocumentoFam() . "</td>";
                    echo "<td>". $familiar->getNombre() . "</td>";
                    echo "<td>". $familiar->getApellido() . "</td>";
                    echo "<td>". $familiar->getSexo() . "</td>";
                    echo "<td>". $familiar->getParentezco() . "</td>";
                    echo "<td>". $familiar->getFechaNac() . "</td></tr>";          
                }
            ?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>
