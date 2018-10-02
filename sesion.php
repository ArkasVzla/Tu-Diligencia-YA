<?php session_start();

$errores = '';
$enviado = '';

// Validaciones
if (isset($_POST['submit'])) {
    $servicio = $_POST['servicio'];
    $archivo = $_POST['archivo'];
    $email = $_POST['email'];
    $numero_telefono = $_POST['numero_telefono'];
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

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $email = trim($email);
        $email = htmlspecialchars($email);
        $email = stripcslashes($email);
    } else {
        $errores .= 'Ingrese los datos correctamente';
    }

    if (!empty($numero_telefono)){
        $numero_telefono = filter_var($numero_telefono, FILTER_SANITIZE_STRING);
        $numero_telefono = trim($numero_telefono);
        $numero_telefono = htmlspecialchars($numero_telefono);
        $numero_telefono = stripcslashes($numero_telefono);
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

// Conexion a la base de datos
try{
    $conexion = new PDO('mysql:host=localhost;dbname=tudiligenciaya', 'root', '');
} catch(PDOException $e){
    echo "Error:" . $e->getMessage();
}

if (!$conexion) {
    header('Location: index.php');
    die();
}


// guardar en la base de datos los servicios
if ($_SERVER['REQUEST_METHOD']  == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['archivo']['tmp_name']);
    if ($check !== false) {
        $carpeta_destino = 'archivos/';
        $archivo_subido = $carpeta_destino . $_FILES['archivo']['name'];
        move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare('
            INSERT INTO servicios (servicio, archivo, email, numero_telefono, mensaje) 
            VALUES (:servicio, :archivo, :email, :numero_telefono, :mensaje)
        ');
        
        $statement->execute(array(
            ':servicio' => $_POST['servicio'],
            ':archivo' => $_FILES['archivo']['name'],
            ':email' => $_POST['email'],
            ':numero_telefono' => $_POST['numero_telefono'],
            ':mensaje' => $_POST['mensaje']
        ));

    } else {
        $error = "El archivo es muy pesado";
    }
}


// Paginacion
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1 );
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;


// traer documentos de la base de datos
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM servicios LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();


$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

if(isset($_SESSION['usuario'])){
    require 'views/sesion.view.php';
}else {
    header('Location: login.php');
}

?>