<?php

    $conexion = mysqli_connect("localhost", "root", "", "logueos-registros");

    if($conexion){
      echo 'Conectado a la base de datos de manera exitosa';
    }else{
      echo 'No se pudo conectar a la base de datos';
    }

?>
