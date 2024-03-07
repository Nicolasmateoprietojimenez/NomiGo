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
require('../dao/metodosUsuario.php');
$dao = new nomiGo();
if(isset($_GET['id'])) {
    $docu = $_GET['id'];
    $usuario = $dao->obtenerPordocu($docu);
    require('../vista/modificarusu.php');

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['boton'] == "Modificar") {
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $lugarNac = $_POST['lugar_nac'];
    $fechaNac = $_POST['fecha_nac'];
    $fechaExp = $_POST['fecha_exp'];
    $genero = $_POST['genero'];
    $correo = $_POST['correo'];
    $nombreUsu = $_POST['nombre_usu'];
    $contrasena = $_POST['contrasena']; 
    $usuario = new Usuario($documento, $nombre, $apellido, $lugarNac, $fechaNac, $fechaExp, $genero, $correo, $nombreUsu, $contrasena);
    $dao->modificar($usuario);
    header("location: controladorListaUsuario.php");
}
?>    
</body>
</html>
