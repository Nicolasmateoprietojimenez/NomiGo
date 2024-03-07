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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = $_POST['documento']; 
    $dao->eliminar($documento);
    header("location: controladorListaUsuario.php");
    exit; 
}
?>

    
</body>
</html>
