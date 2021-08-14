<?php

require_once "conexion.php";

class ModeloGerencia{
    
    static public function mdl_gerencia_top10_llantas($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 10 ($tabla.id_paro), $tabla.id_departamento_paro, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, convert(varchar(19),$tabla.inicio_paro) as inicio_paro, convert(varchar(19),$tabla.final_paro) as final_paro, convert(varchar(19),$tabla.fecha_cierre) as fecha_cierre, $tabla.usuario_cierre, $tabla.nombre_paro, $tabla.descripcion_paro, $tabla.ewo, DATEDIFF ( ss, $tabla.inicio_paro , $tabla.final_paro) AS diferencia, DATEDIFF ( MINUTE, $tabla.inicio_paro , $tabla.final_paro) as diferenciamin, DATEDIFF ( HOUR, $tabla.inicio_paro , $tabla.final_paro) as diferenciaho FROM $tabla WHERE $tabla.id_area = 1 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL ORDER BY diferencia DESC");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["diferenciamin"][] = $row["diferenciamin"];
            $respuesta["diferenciaho"][] = $row["diferenciaho"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_gerencia_top10_eje($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 10 ($tabla.id_paro), $tabla.id_departamento_paro, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, convert(varchar(19),$tabla.inicio_paro) as inicio_paro, convert(varchar(19),$tabla.final_paro) as final_paro, convert(varchar(19),$tabla.fecha_cierre) as fecha_cierre, $tabla.usuario_cierre, $tabla.nombre_paro, $tabla.descripcion_paro, $tabla.ewo, DATEDIFF ( ss, $tabla.inicio_paro , $tabla.final_paro) AS diferencia, DATEDIFF ( MINUTE, $tabla.inicio_paro , $tabla.final_paro) as diferenciamin, DATEDIFF ( HOUR, $tabla.inicio_paro , $tabla.final_paro) as diferenciaho FROM $tabla WHERE $tabla.id_area = 2 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL ORDER BY diferencia DESC");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["diferenciamin"][] = $row["diferenciamin"];
            $respuesta["diferenciaho"][] = $row["diferenciaho"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_gerencia_top10_cross($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 10 ($tabla.id_paro), $tabla.id_departamento_paro, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, convert(varchar(19),$tabla.inicio_paro) as inicio_paro, convert(varchar(19),$tabla.final_paro) as final_paro, convert(varchar(19),$tabla.fecha_cierre) as fecha_cierre, $tabla.usuario_cierre, $tabla.nombre_paro, $tabla.descripcion_paro, $tabla.ewo, DATEDIFF ( ss, $tabla.inicio_paro , $tabla.final_paro) AS diferencia, DATEDIFF ( MINUTE, $tabla.inicio_paro , $tabla.final_paro) as diferenciamin, DATEDIFF ( HOUR, $tabla.inicio_paro , $tabla.final_paro) as diferenciaho FROM $tabla WHERE $tabla.id_area = 3 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL ORDER BY diferencia DESC");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["diferenciamin"][] = $row["diferenciamin"];
            $respuesta["diferenciaho"][] = $row["diferenciaho"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_gerencia_top10_metricos($tabla, $id_area, $id_estacion, $id_turno){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 10 ($tabla.id_paro), $tabla.id_departamento_paro, $tabla.id_area, 
        $tabla.id_estacion, $tabla.id_turno, convert(varchar(19),$tabla.inicio_paro) as inicio_paro, 
        convert(varchar(19),$tabla.final_paro) as final_paro, convert(varchar(19),$tabla.fecha_cierre) as fecha_cierre, 
        $tabla.usuario_cierre, $tabla.nombre_paro, $tabla.descripcion_paro, $tabla.ewo, 
        DATEDIFF ( MINUTE, $tabla.inicio_paro , $tabla.final_paro) as diferenciamin
        FROM $tabla 
        WHERE $tabla.id_area = $id_area and $tabla.id_estacion = $id_estacion and $tabla.id_turno = $id_turno AND $tabla.final_paro != '' OR $tabla.final_paro != NULL ORDER BY diferenciamin DESC");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["diferenciamin"][] = $row["diferenciamin"];                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

}