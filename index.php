<?php session_start();

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $errores = '';
    $enviado = '';

    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripcslashes($nombre);
    }else{
        $errores .= 'Por favor ingresa un nombre <br />';
    } 

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        $correo = trim($correo);
        $correo = htmlspecialchars($correo);
        $correo = stripcslashes($correo);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br />';
        }
    } else {
        $errores .='Por favor ingresar un Correo <br />';
    }

    if(!empty($mensaje)){
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripcslashes($mensaje);
    }else{
        $errores .= 'Por favor ingresar un mensaje';
    }

    if(!$errores){
        $enviado = true;
    }
}



require 'views/index.view.php';
?>