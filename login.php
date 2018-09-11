<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $passuno = $_POST['passuno'];

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tudiligenciaya', 'root', '');
    }catch(PDOException $e) {
        echo "Error: . $e->getMessage";
    }

    $statements = $conexion->prepare(
        'SELECT * FROM usuarios WHERE usuario = :usuario AND passuno = :passuno'
    );

    $statements->execute(array(':usuario' => $usuario, ':passuno' => $passuno));

    $resultado = $statements->fetch();

    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: sesion.php');
    }else {
        $errores .= 'Datos incorrectos';
    }
   
}

require 'views/login.view.php';
?>