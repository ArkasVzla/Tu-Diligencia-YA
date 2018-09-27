<?php session_start();

require 'funciones.php';

if(isset($_SESSION['usuario'])){
    require 'views/sesion.view.php';
}else {
    header('Location: login.php');
}
 
$conexion = conexion('tudiligenciaya', 'root', '');

if (!$conexion) {
    header('Location: index.php');
    die();
}

$errores = '';
$enviado = '';

// Validaciones
if (isset($_POST['submit'])) {
    $servicio = $_POST['servicio'];
    $archivo = $_POST['archivo'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje']; 

    if(!empty($servicio)){
        $servicio = $servicio;
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if (!empty($archivo)) {
        $archivo = filter_var($archivo, FILTER_SANITIZE_STRING);
        $archivo = trim($archivo);
        $archivo = htmlspecialchars($archivo);
        $archivo = stripcslashes($archivo);
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if (!empty($correo)) {
        $correo = filter_var($archivo, FILTER_SANITIZE_STRING);
        $correo = trim($archivo);
        $correo = htmlspecialchars($correo);
        $correo = stripcslashes($correo);
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if (!empty($asunto)){
        $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
        $asunto = trim($archivo);
        $asunto = htmlspecialchars($asunto);
        $asunto = stripcslashes($asunto);
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if (!empty($mensaje)){
        $mensaje = filter_var($mensaje. FILTER_SANITIZE_STRING);
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripcslashes($mensaje);
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if(!$errores){
        $enviado = true;
    }
}

// guardar en la base de datos los servicios
if ($_SERVER['REQUEST_METHOD']  == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['archivo']['tmp_name']);
    if ($check !== false) {
        $carpeta_destino = 'archivos/';
        $archivo_subido = $carpeta_destino . $_FILES['archivo']['name'];
        move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare('
            INSERT INTO servicios (servicio, archivo, correo, asunto, mensaje) 
            VALUES (:servicio, :archivo, :correo, :asunto, :mensaje)
        ');
        
        $statement->execute(array(
            ':servicio' => $_POST['servicio'],
            ':archivo' => $_FILES['archivo']['name'],
            ':correo' => $_POST['correo'],
            ':asunto' => $_POST['asunto'],
            ':mensaje' => $_POST['mensaje']
        ));

        
    } else {
        $error = "El archivo es muy pesado";
    }
}

?>