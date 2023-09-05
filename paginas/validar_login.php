<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usu = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$contra = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : '';


$consulta = "SELECT * FROM usuario WHERE nombre_usu='$usu' AND clave_usu='$contra' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usu;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo

  

// Consulta SQL para buscar el usuario
/* $query = "SELECT u.id_usuario, r.id_rol, u.nombre_usu, u.clave_usu, t.nombre_tra,
    t.apellido_tra, r.nombre_rol
    FROM usuario as u 
    INNER JOIN trabajador as t ON u.id_tra = t.id_tra
    INNER JOIN rol as r ON u.id_rol = r.id_rol
    WHERE u.nombre_usu = '$username' AND u.clave_usu = '$password'
    AND u.estado_usu = 1
";*/
