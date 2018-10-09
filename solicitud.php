<?php session_start();

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

switch($_POST['funcion'])
{
    case 'guardar_solicitud':
        $data = [
            'id_servicio' => $_POST['id_servicio'],
            'id_usuario' => $_POST['id_usuario'],
            'archivo' => 'prueba',
            'mensaje' => 'mensaje',
            'estado' => 1,
        ];
        $sql = "INSERT INTO solicitudes (id_servicio, id_usuario, archivo, mensaje, estado) VALUES (:id_servicio, :id_usuario, :archivo, :mensaje, :estado)";
        $stmt= $conexion->prepare($sql);
        $estado = $stmt->execute($data);    
    break;

    case 'traerTodasSolicitudes':
        $sql = "SELECT * FROM solicitudes WHERE 1";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $solicitudes = $stmt->fetchAll();

        echo json_encode($solicitudes);
    break;
}

// guardar en la base de datos los servicios
/*if ($_SERVER['REQUEST_METHOD']  == 'POST' && !empty($_FILES)) {
    if(!empty($errores))
    {
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
}*/

// traer documentos de la base de datos
/*$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM servicios LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();*/
?>