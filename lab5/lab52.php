<?php

   if(is_uploaded_file ($_FILES['nombre_archivo_cliente'] ['tmp_name']) && ($_FILES["nombre_archivo_cliente"]["size"] < 1048576) && (($_FILES['nombre_archivo_cliente']["type"] =="image/jpeg") || ($_FILES['nombre_archivo_cliente']["type"] =="image/jpg") || ($_FILES['nombre_archivo_cliente']["type"] =="image/png") || ($_FILES['nombre_archivo_cliente']["type"] =="image/gif")))
   {
      $nombreDirectorio = "archivos/";
      $nombrearchivo = $_FILES['nombre_archivo_cliente'] ['name'];
      $nombreCompleto = $nombreDirectorio . $nombrearchivo;
        if(is_file($nombreCompleto))
        {
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
             echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
        }
        move_uploaded_file ($_FILES['nombre_archivo_cliente'] ['tmp_name'], $nombreDirectorio . $nombrearchivo);
        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
   }
   else
      echo "No se ha podido subir el archivo (tamaño maximo 1MB y solo imagenes .jpg, .jpeg, .png y .gif) <br>"
?>
