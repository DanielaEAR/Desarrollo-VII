<?php
    $extAllowed =  array('gif','png' ,'jpg', 'jpeg');
    $fileName = $_FILES['nombre_archivo_cliente']['tmp_name'];
    $fileSize = $_FILES['nombre_archivo_cliente']['size'];
    $ext = pathinfo($_FILES['nombre_archivo_cliente']['name']);


    if(in_array($ext['extension'],$extAllowed)){
        if($fileSize <= 1000000){

            if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'])){

                $nombreDirectorio = "archivos/";
                $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
                $nombreCompleto = $nombreDirectorio . $nombrearchivo;
                if (is_file($nombreCompleto)){
                    $idUnico = time();
                    $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                    echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
                }
                move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],
                $nombreDirectorio . $nombrearchivo);
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
            }
            else
                echo "No se ha podido subir el archivo <br>";
        }else
        
        echo "El tamaño supera los 1MB <br>";
    }else
        echo "El formato no es válido <br>";

?>