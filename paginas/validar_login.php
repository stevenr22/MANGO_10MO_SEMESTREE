

  

// Consulta SQL para buscar el usuario
/* $query = "SELECT u.id_usuario, r.id_rol, u.nombre_usu, u.clave_usu, t.nombre_tra,
    t.apellido_tra, r.nombre_rol
    FROM usuario as u 
    INNER JOIN trabajador as t ON u.id_tra = t.id_tra
    INNER JOIN rol as r ON u.id_rol = r.id_rol
    WHERE u.nombre_usu = '$username' AND u.clave_usu = '$password'
    AND u.estado_usu = 1
";*/
