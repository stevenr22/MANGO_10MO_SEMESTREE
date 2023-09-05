
<?php

   function obtenerDatos1(){
            include("../conexion.php");
            $id = $_SESSION['DBid'];
            $sql = "SELECT u.id_usuario, r.id_rol, u.nombre_usu, u.clave_usu, t.nombre_tra,
            t.apellido_tra, r.nombre_rol
            FROM usuario as u 
            INNER JOIN trabajador as t ON u.id_tra = t.id_tra
            INNER JOIN rol as r ON u.id_rol = r.id_rol
            WHERE u.id_usuario = '$id'
            AND u.estado_usu = 1
            ";

            $result = $conn->query($sql);
            $dato = array();
            if ($result->num_rows > 0) {
                $filas = $result->fetch_assoc();
                //nav
                $dato["nombre"] = $filas["nombre_tra"]." ".$filas["apellido_tra"];
                $dato["rol"] = $filas["nombre_rol"];
                
               

            } else {
                $dato = "No se encontraron datos";
            }
        
            // Cerrar la conexión a la base de datos
            $conn->close();
        
            return $dato;
        }
?>