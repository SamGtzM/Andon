<?php

require_once "conexion.php";

class ModeloAdministrativo{

    /*-------------------------------------------------------------------------------------------------
                                            Mantenimiento
    -------------------------------------------------------------------------------------------------*/

    static public function mdlAdministrativoMttoC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoHC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoHE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoHL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '1' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoMttoCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoMttoEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoMttoLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_metricas_top_mtto_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 1 AND $tabla.id_departamento_paro = 1 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_mtto_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 2 AND $tabla.id_departamento_paro = 1 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_mtto_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 3 AND $tabla.id_departamento_paro = 1 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Mantenimiento
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Producciòn
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function mdlAdministrativoProdC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre,  $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre,  $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre,  $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdHC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdHE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdHL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '2' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoProdCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoProdEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoProdLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_prod_scrapp_llantas($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla 
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
        
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 1 ORDER BY $tabla.id DESC)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_prod_scrapp_cross($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla 
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
        
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 3 ORDER BY $tabla.id DESC)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_prod_scrapp_eje($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla 
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
        
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:29:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:30:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)
    
        UNION ALL
    
        SELECT $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta
        FROM $tabla
        WHERE $tabla.id = (SELECT TOP(1)$tabla.id
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:00:00.000'))) AND 
        (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:59:59.000'))) AND $tabla.id_turno != 0 AND $tabla.id_area = 2 ORDER BY $tabla.id DESC)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_registrar_scrapp_llantas($scrapp, $retrabajo, $ewo, $idscrappl, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.scrapp= :scrapp, $tabla.retrabajo=:retrabajo , $tabla.ewo = :ewo WHERE $tabla.id = :id");
        $stmt -> bindParam(":scrapp", $scrapp, PDO::PARAM_INT);
        $stmt -> bindParam(":retrabajo", $retrabajo, PDO::PARAM_INT);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_STR);
        $stmt -> bindParam(":id", $idscrappl, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_registrar_scrapp_cross($scrapp, $retrabajo, $ewo, $idscrappl, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.scrapp= :scrapp, $tabla.retrabajo=:retrabajo , $tabla.ewo = :ewo WHERE $tabla.id = :id");
        $stmt -> bindParam(":scrapp", $scrapp, PDO::PARAM_INT);
        $stmt -> bindParam(":retrabajo", $retrabajo, PDO::PARAM_INT);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_STR);
        $stmt -> bindParam(":id", $idscrappl, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_registrar_scrapp_eje($scrapp, $retrabajo, $ewo, $idscrappl, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.scrapp= :scrapp, $tabla.retrabajo=:retrabajo , $tabla.ewo = :ewo WHERE $tabla.id = :id");
        $stmt -> bindParam(":scrapp", $scrapp, PDO::PARAM_INT);
        $stmt -> bindParam(":retrabajo", $retrabajo, PDO::PARAM_INT);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_STR);
        $stmt -> bindParam(":id", $idscrappl, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_prod_scrapp_llantas_h($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP(1000) $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta FROM $tabla WHERE $tabla.id_area = 1 AND $tabla.ewo != '' AND $tabla.scrapp != '' AND $tabla.retrabajo != '' AND $tabla.id_turno != 0 AND $tabla.rate != 0");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_prod_scrapp_eje_h($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP(1000) $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta FROM $tabla WHERE $tabla.id_area = 2 AND $tabla.ewo != '' AND $tabla.scrapp != '' AND $tabla.retrabajo != '' AND $tabla.id_turno != 0 AND $tabla.rate != 0");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_prod_scrapp_cross_h($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP(1000) $tabla.id, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.ewo, $tabla.scrapp, $tabla.retrabajo, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.fecha_alta FROM $tabla WHERE $tabla.id_area = 3 AND $tabla.ewo != '' AND $tabla.scrapp != '' AND $tabla.retrabajo != '' AND $tabla.id_turno != 0 AND $tabla.rate != 0");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id"][] = $row["id"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["scrapp"][] = $row["scrapp"];
            $respuesta["retrabajo"][] = $row["retrabajo"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_metricas_top_prod_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 1 AND $tabla.id_departamento_paro = 2 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_prod_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 2 AND $tabla.id_departamento_paro = 2 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_prod_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 3 AND $tabla.id_departamento_paro = 2 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Producciòn
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Calidad
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function mdlAdministrativoCalidadC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalidadE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalidadL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalidadHC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalidadHE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalidadHL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '3' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoCalCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoCalEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoCalLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_metricas_top_cal_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 1 AND $tabla.id_departamento_paro = 3 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_cal_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 2 AND $tabla.id_departamento_paro = 3 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_cal_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 3 AND $tabla.id_departamento_paro = 3 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Calidad
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Logistica
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function mdlAdministrativoLogisticaC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogisticaE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogisticaL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT $tabla1.id_paro, $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '1' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogisticaHC($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '3' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogisticaHE($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '2' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogisticaHL($tabla1){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1000 ($tabla1.id_paro), $tabla1.id_departamento_paro, $tabla1.id_area, $tabla1.id_estacion, $tabla1.id_turno, $tabla1.rate, $tabla1.usuario_cierre, $tabla1.producido, $tabla1.OEE, $tabla1.acumuladas, $tabla1.nombre_paro, $tabla1.descripcion_paro, $tabla1.ewo, $tabla1.activo_status, convert(varchar(19),$tabla1.inicio_paro) as inicio_paro, convert(varchar(19),$tabla1.final_paro) as final_paro, convert(varchar(19),$tabla1.fecha_cierre) as fecha_cierre FROM $tabla1 WHERE $tabla1.id_area = '1' AND $tabla1.activo_status = '0' AND $tabla1.id_departamento_paro = '4' ORDER BY $tabla1.id_paro");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["usuario_cierre"][] = $row["usuario_cierre"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["nombre_paro"][] = $row["nombre_paro"];
            $respuesta["descripcion_paro"][] = $row["descripcion_paro"];
            $respuesta["ewo"][] = $row["ewo"];
            $respuesta["activo_status"][] = $row["activo_status"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];
            $respuesta["fecha_cierre"][] = $row["fecha_cierre"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlAdministrativoLogCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoLogEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlAdministrativoLogLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla){

        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET $tabla.usuario_cierre= :usuario_cierre, $tabla.fecha_cierre=:fecha_cierre , $tabla.activo_status = :activo_status, $tabla.nombre_paro = :nombre_paro, $tabla.descripcion_paro = :descripcion_paro, $tabla.ewo = :ewo WHERE $tabla.id_paro = :id_paro");
        $stmt -> bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":usuario_cierre", $usuario_cierre, PDO::PARAM_STR);
        $stmt -> bindParam(":activo_status", $activo_status, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_paro", $nombre_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion_paro", $descripcion_paro, PDO::PARAM_STR);
        $stmt -> bindParam(":ewo", $ewo, PDO::PARAM_INT);
        $stmt -> bindParam(":id_paro", $id_paro, PDO::PARAM_INT);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_metricas_top_log_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 1 AND $tabla.id_departamento_paro = 4 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_log_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 2 AND $tabla.id_departamento_paro = 4 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    static public function mdl_metricas_top_log_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro){
		$stmt = Conexion::conectar()->prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia, convert(char, $tabla.fecha_alta, 101) as fecha_alta , 
        count(datediff ( ss, '$inicio_paro' , '$final_paro')) AS cantidad
        FROM $tabla
        WHERE $tabla.fecha_alta BETWEEN ('$inicio_paro') AND ('$final_paro') AND id_area = $id_area AND id_estacion = $id_estacion AND $tabla.id_turno = 3 AND $tabla.id_departamento_paro = 4 AND $tabla.final_paro != '' OR $tabla.final_paro != NULL
        GROUP BY convert(char, $tabla.fecha_alta, 101)");
        $stmt -> execute();
        foreach ($stmt as $row) {
                        
            $respuesta["diferencia"][] = $row["diferencia"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];
            $respuesta["cantidad"][] = $row["cantidad"];
                    
        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;
	}

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Logistica
    -------------------------------------------------------------------------------------------------*/
}