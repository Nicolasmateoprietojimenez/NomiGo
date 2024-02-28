<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controlador Lista</title>
</head>
<body>
<?php 

require('../dao/metodosUsuario.php');
$dao=new nomiGo();
$usuario=$dao->listar();
require('../vista/listarUsuario.php');
?>    
</body>
</html>

