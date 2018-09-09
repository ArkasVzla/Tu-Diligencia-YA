<?php

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $passuno = $_POST['passuno'];
    $passuno = hash('sha512', $passuno);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tudiligenciaya', 'root', '');
    }catch(PDOException $e) {
        echo "Error: . $e->getMessage";
    }

    $statements = $conexion->prepare(
        "SELECT * FROM usuarios WHERE usuario = :usuario AND passuno = :passuno"
    );

    $statements->execute(array(
        ':usuario' => $usuario,
        ':passuno' => $passuno
    ));

    $resultado = $statements->fetch();
    var_dump($resultado);
   
}

require 'login.view.php';
?>