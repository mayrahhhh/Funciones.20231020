<?php

/**
 * esta funcion es para consultar a las personas con el id y su contraseña
 * @return texto muestra los datos de los usuarios
 * 
 * @param numero muestra los documento mediante el id
 * 
 * @param numero valida la contraseña
 */

function consultar($id_usuario=null, $contraseña=null){
    $salida="";//inicia la variable
    $conexion = mysqli_connect("localhost", "root", "root", "repaso_funciones");//conexion de la base de datos
    $sql="SELECT * from usuarios "; //llama la tabla de la base de datos
   
    if($id_usuario!=null and $contraseña!=null)  $sql.="WHERE id_usuario ='$id_usuario'and contraseña='$contraseña'";//cuando el documento y la contraseña son nulas
    $resultado=$conexion->query($sql); //ejecuta una consulta
    while($fila = mysqli_fetch_assoc($resultado)) //recorre el resultado del SQL
    {
        $salida .=$fila['id_usuario']."  ";  //almacena una informacion de la base de datos 
        $salida .=$fila['nombre']."  "; //almacena una informacion de la base de datos 
        $salida .=$fila['contraseña']."  "; //almacena una informacion de la base de datos 
    }

    return $salida;//retorna la salida, los datos requeridos de la base de datos
    $conexion= close();//cierre de la conexion

}