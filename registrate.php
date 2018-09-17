<?php session_start();
 
if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $pais = $_POST['pais'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $passuno = $_POST['passuno'];
    $passdos = $_POST['passdos'];
    $errores = '';
    $enviado = '';

        
    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripcslashes($nombre);
    } else {
        $errores .='Por favor ingresar el Nombre <br /> ';
    }

    if(!empty($apellido)){
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        $apellido = trim($apellido);
        $apellido = htmlspecialchars($apellido);
        $apellido = stripcslashes($apellido);
    } else {
        $errores .='Por favor ingresar el Apellido <br />';
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
 
    if(!empty($usuario)){
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
        $usuario = trim($usuario);
        $usuario = htmlspecialchars($usuario);
        $usuario = stripcslashes($usuario);
    } else {
        $errores .='Por favor ingresar el usuario <br />';
    }

    if(!empty($cedula)){
        $cedula = filter_var($cedula, FILTER_SANITIZE_STRING);
        $cedula = trim($cedula);
        $usuario = htmlspecialchars($cedula);
        $usuario = stripslashes($cedula);
    }else {
        $errores .='Por favor ingresar la cedula <br />';
    }

    if(!empty($pais)){
        $pais = filter_var($pais, FILTER_SANITIZE_STRING);
        $pais = trim($pais);
        $pais = htmlspecialchars($pais);
        $pais = stripcslashes($pais);
    } else{
        $errores .= 'Por favor ingresa el pais <br />';
    }

    if(!empty($direccion)){
        $direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
        $direccion = trim($direccion);
        $direccion = htmlspecialchars($direccion);
        $direccion = stripslashes($direccion);
    }else{
        $errores .= 'Por favor ingresar la direccion <br />';
    }

    if(!empty($telefono)){
        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
        $telefono = trim($telefono);
        $telefono = htmlspecialchars($telefono);
        $telefono = stripcslashes($telefono);
    }else{
        $errores .= 'Por favor ingresar un Nº Telefono <br />';
    }

    
    if(!empty($passuno)){
        $passuno = filter_var($passuno, FILTER_SANITIZE_NUMBER_INT);
        $passuno = trim($passuno);
        $passuno = htmlspecialchars($passuno);
        $passuno = stripcslashes($passuno);
    }else{
        $errores .= 'Ingressa una contraseña <br />';
    }

    if(!empty($passdos)){
        $passdos = filter_var($passdos, FILTER_SANITIZE_NUMBER_INT);
        $passdos = trim($passdos);
        $passdos = htmlspecialchars($passdos);
        $passdos = stripcslashes($passdos);
    }else{
        $errores .= 'Ingressa una contraseña <br />';
    }

    if($passuno !== $passdos){
        $errores .= 'la contraseña no coincide <br />';
    }   

    //Validacion si todos los datos estan enviandos
    if(!$errores){
        $enviado = true;
    }
} 

 // GUARDAR REGISTRO EN LA BASE DE DATOS

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $apellido = filter_var(strtolower($_POST['apellido']), FILTER_SANITIZE_STRING);
    $correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $cedula = filter_var(strtolower($_POST['cedula']), FILTER_SANITIZE_STRING);
    $pais = filter_var(strtolower($_POST['pais']), FILTER_SANITIZE_STRING);
    $direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
    $telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING);
    $passuno = $_POST['passuno'];
    $passdos = $_POST['passdos'];
    
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tu_diligencia_ya', 'root', '');
    } catch(PDOException $e){
        echo "Error:" . $e->getMessage();
    }
    
    $statements = $conexion->prepare("INSERT INTO usuarios (nombre,apellido,correo,usuario,cedula,pais,direccion,telefono,passuno,passdos) VALUE('$nombre','$apellido', '$correo', '$usuario', '$cedula', '$pais', '$direccion', $telefono, '$passuno', '$passdos')");
    $statements->execute(array(':usuario' => $usuario));
    $resultados = $statements->fetch();


    if ($resultados != false) { 
        $errores .= 'El usuario ya existe';
    }
 

}

require 'views/registrate.view.php';
?>
     