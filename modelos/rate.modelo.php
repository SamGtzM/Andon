<?php

require_once "conexion.php";

class ModeloRate{

    static public function mdlmostrarrate($tabla1, $tabla2, $tabla3, $tabla4){

        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_rate, $tabla1.id_turno, $tabla2.nombre_turno, $tabla1.id_area, $tabla3.nombre_area, $tabla1.id_estacion, $tabla4.nombre_estacion, $tabla1.rate, convert(char(5), $tabla1.rate_desde, 108) as rate_desde, convert(char(5), $tabla1.rate_hasta, 108) as rate_hasta, $tabla1.usuario_alta, convert(varchar(19),$tabla1.fecha_alta) as fecha_alta FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_turno = $tabla1.id_turno INNER JOIN $tabla3 ON $tabla3.id_area = $tabla1.id_area INNER JOIN $tabla4 ON $tabla4.id_estacion = $tabla1.id_estacion WHERE $tabla1.activo = '1' ORDER BY $tabla1.id_rate");
        $stmt -> execute();
        foreach ($stmt as $row) {
                            
            $respuesta["id_rate"][] = $row["id_rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["nombre_turno"][] = $row["nombre_turno"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["nombre_area"][] = $row["nombre_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["nombre_estacion"][] = $row["nombre_estacion"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["rate_desde"][] = $row["rate_desde"];
            $respuesta["rate_hasta"][] = $row["rate_hasta"];
            $respuesta["usuario_alta"][] = $row["usuario_alta"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                        
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdleliminarrate($usuarioActualEliminar, $fecha, $datos, $activo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.Usuario_baja= '$usuarioActualEliminar', $tabla.fecha_baja='$fecha' , $tabla.activo = :activo WHERE $tabla.id_rate = :datos");
        $stmt -> bindParam(":datos", $datos, PDO::PARAM_INT);
        $stmt -> bindParam(":activo", $activo, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlaltarate($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (id_turno, id_area, id_estacion, rate, rate_desde, rate_hasta, Usuario_alta, fecha_alta, activo) VALUES (:id_turno, :id_area, :id_estacion, :rate, :rate_desde, :rate_hasta, :Usuario_alta, :fecha_alta, :activo)");
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate_desde", $datos["rate_desde"], PDO::PARAM_STR);
        $stmt -> bindParam(":rate_hasta", $datos["rate_hasta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":Usuario_alta", $datos["Usuario_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":activo", $datos["activo"], PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_rate_cambio($tabla1, $tabla2, $tabla3, $tabla4, $idrate){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla1.id_rate), $tabla1.id_turno, $tabla2.nombre_turno, $tabla1.id_area, $tabla3.nombre_area, $tabla1.id_estacion, $tabla4.nombre_estacion, $tabla1.rate, convert(char(5), $tabla1.rate_desde, 108) as rate_desde, convert(char(5), $tabla1.rate_hasta, 108) as rate_hasta, $tabla1.usuario_alta, convert(varchar(19),$tabla1.fecha_alta) as fecha_alta FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_turno = $tabla1.id_turno INNER JOIN $tabla3 ON $tabla3.id_area = $tabla1.id_area INNER JOIN $tabla4 ON $tabla4.id_estacion = $tabla1.id_estacion WHERE $tabla1.id_rate = '$idrate' AND $tabla1.activo = '1' ORDER BY $tabla1.id_rate");
        $stmt -> execute();
        foreach ($stmt as $row) {
                            
            $respuesta["id_rate"][] = $row["id_rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["nombre_turno"][] = $row["nombre_turno"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["nombre_area"][] = $row["nombre_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["nombre_estacion"][] = $row["nombre_estacion"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["rate_desde"][] = $row["rate_desde"];
            $respuesta["rate_hasta"][] = $row["rate_hasta"];
            $respuesta["usuario_alta"][] = $row["usuario_alta"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                        
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_update_rate($tabla, $id_rate, $id_turno, $id_area, $id_estacion, $rate, $rate_desde, $rate_hasta, $fecha_alta, $Usuario_alta, $activo){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.fecha_alta = :fecha_alta, $tabla.Usuario_alta = :Usuario_alta, $tabla.activo = :activo, $tabla.id_turno = :id_turno, $tabla.id_area = :id_area, $tabla.id_estacion = :id_estacion, $tabla.rate = :rate, $tabla.rate_desde = :rate_desde, $tabla.rate_hasta = :rate_hasta WHERE $tabla.id_rate = :id_rate");
        $stmt -> bindParam(":fecha_alta", $fecha_alta, PDO::PARAM_STR);
        $stmt -> bindParam(":Usuario_alta", $Usuario_alta, PDO::PARAM_STR);
        $stmt -> bindParam(":activo", $activo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $id_turno, PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $id_area, PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $id_estacion, PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $rate, PDO::PARAM_INT);
        $stmt -> bindParam(":rate_desde", $rate_desde, PDO::PARAM_STR);
        $stmt -> bindParam(":rate_hasta", $rate_hasta, PDO::PARAM_STR);
        $stmt -> bindParam(":id_rate", $id_rate, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

}