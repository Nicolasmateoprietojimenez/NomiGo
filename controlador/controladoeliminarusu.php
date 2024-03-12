<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require('../dao/metodosUsuario.php');
require('../vista/eliminarusu.php');

$dao = new nomiGo();

if (isset($_GET[$documento])) {
    $documento = $GET['documento'];
    $usu= new nomiGo($documento,null,null,null,null,null,null,null,null,null)
    $dao->eliminar($usu);
    header("location: controladorListaUsuario.php");
}
?>

    
</body>
</html>
