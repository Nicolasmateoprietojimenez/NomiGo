<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Insertar Empleado</title>
</head>
<body>
    <?php 
    require('../vista/insertarempe.php'); 
    require('../dao/metodosempe.php');

    $dao = new MetodosEmpleado();

    if (isset($_POST['boton'])) { 
        $id_empleado = $_POST['id_empleado'];
        $documento = $_POST['documento'];
        $documento_fam = $_POST['documento_fam'];
        $salario_base = $_POST['salario_base'];

        $empleado = new Empleado($id_empleado, $documento, $documento_fam, $salario_base);

        $dao->registrar($empleado);

        echo "REGISTRO INSERTADO CON ÉXITO";
    }
    ?>    
</body>
</html>
