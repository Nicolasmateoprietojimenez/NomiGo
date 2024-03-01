<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>
<?php 
require('./vista/insertarFamilia.php');
require('./dao/metodosFamilia.php');
$dao=new MetodosFamilia();
if (isset($_GET['boton'])) {
    $documento_fam = $_GET['doc'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $sexo = $_GET['sexo'];
    $parentezco = $_GET['parentezco'];
    $fecha_nac = $_GET['fechaN'];
    
    $familiar = new Familia($documento_fam, $nombre, $apellido, $sexo, $parentezco, $fecha_nac);
    $dao->registrar($familiar);
    echo "REGISTRO INSERTADO CON ÉXITO";    
}

           
?>    
</body>
</html>
