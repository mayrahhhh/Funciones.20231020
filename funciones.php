<?php
//es lo que aparecera en el navegador mediante el include
//echo "hola";

function consulta() {//nombre de la consulta de un usuario
    $salida = ""; // Inicia la variable
    $conexion = mysqli_connect("localhost", "root", "root", "repaso_funciones"); // Conexión a la base de datos
    $sql = "SELECT * FROM usuarios"; // Consulta MYSQL

    $resultado = $conexion->query($sql); // Ejecuta la consulta

    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
            $salida .= $fila['id_usuario'];//ID de la colmna de la base de datos
            $salida .= $fila['nombre'];//nombre de la colmna de la base de datos
            $salida .= $fila['sitio'];//nombre del sitio de la colmna de la base de datos
            $salida .= $fila['invitacion'];//invitacion de la colmna de la base de datos
        
    }
    

    return $salida; // Retorna el resultado //datos de un usuario llamado de la base de datos
}
