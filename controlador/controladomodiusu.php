<?php
include('../dao/metodosUsuario.php');

$usuarioDAO = new nomiGo();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $usuarioDAO->modificar($usuario);
    header('Location: ../vista/listarUsuario.php');
    exit();
}

?>