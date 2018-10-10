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
        $estado = 1;
        /*if (!empty($_FILES)) {
            echo "entra";
            $targetFolder = 'archivos/';    
            $tempFile = $_FILES['file']['tmp_name'];    
            $tempFile = $_FILES['file']['tmp_name'];    
            //$tempFile = date("YmdHis");    
            //$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $targetPath = $targetFolder;    
            $name=str_replace(' ','',$_FILES['file']['name']);    
            
            //$targetFile = rtrim($targetPath,'/') . '/' .$numero_imagen.$name;
            $nombre_imagen = date('YmdGisu');    
            $fileext = explode('.',$_FILES['file']['name']);    
            $cantmaxext = count($fileext);    
            $extensionarchivo = $fileext[$cantmaxext-1];    
            $targetFile = rtrim($targetPath,'/') . '/' .$nombre_imagen.'.'.$extensionarchivo;
            // Validate the file type    
            $fileTypes = array('jpg','jpeg','gif','png','JPG','JPEG','GIF','PNG', 'pdf', 'PDF');
            // File extensions    
            //$fileParts = pathinfo($numero_imagen.$name);    
            $fileParts = pathinfo($name);    
            if (in_array($fileParts['extension'],$fileTypes)) {        
                move_uploaded_file($tempFile,$targetFile);        
                $archivo = $nombre_imagen.'.'.$extensionarchivo;
                $estado = 1;    
            } else {        
                $estado = 0;;    
            }
        }*/

        if($estado){
            $data = [
                'id_servicio' => $_POST['id_servicio'],
                'id_usuario' => $_POST['id_usuario'],
                'archivo' => 'test',
                'mensaje' => 'mensaje',
                'estado' => 0,
            ];
            $sql = "INSERT INTO solicitudes (id_servicio, id_usuario, archivo, mensaje, estado) VALUES (:id_servicio, :id_usuario, :archivo, :mensaje, :estado)";
            $stmt= $conexion->prepare($sql);
            $estado = $stmt->execute($data);   
        } else {
            $estado = 0;
        }

        echo $estado;
    break;

    case 'traerTodasSolicitudes':
        $filtro = '';
        if(isset($_POST['id_usuario']))
            $filtro.=' AND id_usuario='.$_POST['id_usuario'];
        if(isset($_POST['id']))
            $filtro.=' AND s.id='.$_POST['id'];

        $sql = "SELECT s.id, s.id_servicio, s.id_usuario, s.archivo, s.mensaje, s.estado, u.nombre as nombre_usuario, u.apellido as apellido_usuario, u.correo, u.cedula, u.telefono, se.nombre FROM solicitudes as s INNER JOIN usuarios as u ON (s.id_usuario=u.id) INNER JOIN servicios as se ON (s.id_servicio=se.id) WHERE 1".$filtro;
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $solicitudes = $stmt->fetchAll();

        echo json_encode($solicitudes);
    break;

    case 'eliminarSolicitud':
        $sql = 'DELETE FROM solicitudes WHERE id='.$_POST['id'].' AND id_usuario='.$_POST['id_usuario']; 
        $stmt = $conexion->prepare($sql);
        $estado = $stmt->execute();

        echo $estado;
    break;

    case 'cambiarEstado':
        $sql = 'UPDATE solicitudes SET estado='.$_POST['estado'].' WHERE id='.$_POST['id'].''; 
        $stmt = $conexion->prepare($sql);
        $estado = $stmt->execute();

        echo $estado;
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