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
require('../vista/insertarUsuario.php');
require('../dao/metodosUsuario.php');
$dao=new nomiGo();
if (isset($_GET['boton'])) {
    $docu = $_GET['doc'];
    $nom = $_GET['nombre'];
    $ape = $_GET['apellido'];
    $lugarN = $_GET['lugarN'];
    $fechaN = $_GET['fechaN'];
    $fechaE = $_GET['fechaE'];
    $sexo = $_GET['genero'];
    $correo = $_GET['correo'];
    $nombreU = $_GET['nombreU'];
    $contrasena = $_GET['contrasena']; 
    $a = new usuario($docu, $nom, $ape, $lugarN, $fechaN, $fechaE, $sexo, $correo, $nombreU, $contrasena);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON ÉXITO";    
}
?>    
</body>
</html>
