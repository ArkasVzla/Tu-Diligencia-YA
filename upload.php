<?php
// Define a destination
$targetFolder = 'archivos/'; 
// Relative to the root
var_dump($_FILES);

if (!empty($_FILES)) {    
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
        echo $nombre_imagen.'.'.$extensionarchivo;    
    } else {        
        echo 0;    
    }
}
?>