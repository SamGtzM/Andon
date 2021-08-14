<?php

require_once "conexion.php";

class ModeloUsuarios{
    
    static public function mdlusuario($tabla1, $tabla2, $tabla3, $user, $pass){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_usuario, $tabla1.numero_empleado, $tabla1.nombre_completo, $tabla1.correo_electronico, $tabla1.usuario, $tabla1.id_departamento, $tabla2.nombre_departamento, $tabla1.id_acceso, $tabla3.tipo_acceso FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_departamento = $tabla1.id_departamento INNER JOIN $tabla3 ON $tabla3.id_acceso = $tabla1.id_acceso WHERE pass = :pass and usuario = :user AND $tabla1.activo = '1'");
        $stmt -> bindParam(":pass", $pass, PDO::PARAM_STR);
        $stmt -> bindParam(":user", $user, PDO::PARAM_STR);
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_usuario"] = $row["id_usuario"];
            $respuesta["numero_empleado"] = $row["numero_empleado"];
            $respuesta["nombre_completo"] = $row["nombre_completo"];
            $respuesta["correo_electronico"] = $row["correo_electronico"];
            $respuesta["usuario"] = $row["usuario"];
            $respuesta["id_departamento"] = $row["id_departamento"];
            $respuesta["nombre_departamento"] = $row["nombre_departamento"];
            $respuesta["id_acceso"] = $row["id_acceso"];
            $respuesta["tipo_acceso"] = $row["tipo_acceso"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlmostrarusuarios($tabla1, $tabla2, $tabla3){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_usuario, $tabla1.numero_empleado, $tabla1.nombre_completo, $tabla1.correo_electronico, $tabla1.usuario_alta, convert(varchar(19),$tabla1.fecha_alta) as fecha_alta, $tabla1.usuario, $tabla1.id_departamento, $tabla2.nombre_departamento, $tabla1.id_acceso, $tabla3.tipo_acceso FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_departamento = $tabla1.id_departamento INNER JOIN $tabla3 ON $tabla3.id_acceso = $tabla1.id_acceso WHERE $tabla1.activo = '1' ORDER BY $tabla1.id_usuario");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["numero_empleado"][] = $row["numero_empleado"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];
            $respuesta["usuario_alta"][] = $row["usuario_alta"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["usuario"][] = $row["usuario"];
            $respuesta["id_departamento"][] = $row["id_departamento"];
            $respuesta["nombre_departamento"][] = $row["nombre_departamento"];
            $respuesta["id_acceso"][] = $row["id_acceso"];
            $respuesta["tipo_acceso"][] = $row["tipo_acceso"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdleliminarusuario($usuarioActualEliminar, $fecha, $datos, $activo, $tabla, $idUsuarioActual){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_baja= '$usuarioActualEliminar', $tabla.fecha_baja='$fecha' , $tabla.activo = :activo WHERE $tabla.id_usuario = :datos AND $tabla.id_usuario <> :id_actual");
        $stmt -> bindParam(":datos", $datos, PDO::PARAM_INT);
        $stmt -> bindParam(":activo", $activo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_actual", $idUsuarioActual, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlaltausuario($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (id_departamento, id_acceso, numero_empleado, nombre_completo, correo_electronico, usuario, pass, usuario_alta, fecha_alta, activo) VALUES (:id_departamento, :id_acceso, :numero_empleado, :nombre_completo, :correo_electronico, :usuario, :pass, :usuario_alta, :fecha_alta, :activo)");
        $stmt -> bindParam(":id_departamento", $datos["id_departamento"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_acceso", $datos["id_acceso"], PDO::PARAM_INT);
        $stmt -> bindParam(":numero_empleado", $datos["numero_empleado"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre_completo", $datos["nombre_completo"], PDO::PARAM_STR);
        $stmt -> bindParam(":correo_electronico", $datos["correo_electronico"], PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt -> bindParam(":pass", $datos["pass"], PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_alta", $datos["usuario_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":activo", $datos["activo"], PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlinfousuario($tabla1, $tabla2, $tabla3){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_usuario, $tabla1.numero_empleado, $tabla1.nombre_completo, $tabla1.correo_electronico, $tabla1.usuario_alta,  convert(char(10),$tabla1.fecha_alta,103) as fecha_alta, char(10) as fecha_alta, $tabla1.usuario, $tabla1.id_departamento, $tabla2.nombre_departamento, $tabla1.id_acceso, $tabla3.tipo_acceso FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_departamento = $tabla1.id_departamento INNER JOIN $tabla3 ON $tabla3.id_acceso = $tabla1.id_acceso AND $tabla1.activo = '1' ORDER BY $tabla1.id_usuario");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["numero_empleado"][] = $row["numero_empleado"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];
            $respuesta["usuario_alta"][] = $row["usuario_alta"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["usuario"][] = $row["usuario"];
            $respuesta["id_departamento"][] = $row["id_departamento"];
            $respuesta["nombre_departamento"][] = $row["nombre_departamento"];
            $respuesta["id_acceso"][] = $row["id_acceso"];
            $respuesta["tipo_acceso"][] = $row["tipo_acceso"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlcambiousuario($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.id_departamento= :id_departamento, $tabla.id_acceso=:id_acceso , $tabla.numero_empleado = :numero_empleado, $tabla.nombre_completo = :nombre_completo, $tabla.correo_electronico = :correo_electronico, $tabla.usuario = :usuario, $tabla.pass = :pass, $tabla.usuario_alta = :usuario_alta, $tabla.fecha_alta = :fecha_alta, $tabla.activo = :activo WHERE $tabla.id_usuario = :id_usuario");
        $stmt -> bindParam(":id_departamento", $datos["id_departamento"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_acceso", $datos["id_acceso"], PDO::PARAM_INT);
        $stmt -> bindParam(":numero_empleado", $datos["numero_empleado"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre_completo", $datos["nombre_completo"], PDO::PARAM_STR);
        $stmt -> bindParam(":correo_electronico", $datos["correo_electronico"], PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt -> bindParam(":pass", $datos["pass"], PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_alta", $datos["usuario_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":activo", $datos["activo"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlmostrarusuarios2($tabla1, $tabla2, $tabla3, $idusuario){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_usuario, $tabla1.numero_empleado, $tabla1.nombre_completo, $tabla1.correo_electronico, $tabla1.usuario_alta, convert(varchar(19),$tabla1.fecha_alta) as fecha_alta, $tabla1.usuario, $tabla1.id_departamento, $tabla2.nombre_departamento, $tabla1.id_acceso, $tabla3.tipo_acceso FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_departamento = $tabla1.id_departamento INNER JOIN $tabla3 ON $tabla3.id_acceso = $tabla1.id_acceso WHERE $tabla1.id_usuario = '$idusuario' AND  $tabla1.activo = '1' ORDER BY $tabla1.id_usuario");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["numero_empleado"][] = $row["numero_empleado"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];
            $respuesta["usuario_alta"][] = $row["usuario_alta"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["usuario"][] = $row["usuario"];
            $respuesta["id_departamento"][] = $row["id_departamento"];
            $respuesta["nombre_departamento"][] = $row["nombre_departamento"];
            $respuesta["id_acceso"][] = $row["id_acceso"];
            $respuesta["tipo_acceso"][] = $row["tipo_acceso"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }


}