<?php

// print_r($_POST);

if (!$_POST) {
    header ('Location: http://localhost/Tu-Diligencia-YA/registrate.php');
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$cedula = $_POST['cedula'];
$pais = $_POST['pais'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$passuno = $_POST['passuno'];
$passdos = $_POST['passdos'];

echo 'Hola ' . $nombre . ' eres ' . $sexo;

?>