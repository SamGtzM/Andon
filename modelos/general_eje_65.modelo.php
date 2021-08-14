<?php

require_once "conexion.php";

class ModeloEje_65{

    static public function mdl_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT $tabla.id_status_eje_65, $tabla.status_eje_65_mantenimiento, $tabla.status_eje_65_calidad, $tabla.status_eje_65_produccion, $tabla.status_eje_65_logistica, $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19),$tabla.inicio_paro_eje_65_mantenimiento,121) as inicio_paro_eje_65_mantenimiento, convert(varchar(19),$tabla.inicio_paro_eje_65_calidad,121) as inicio_paro_eje_65_calidad, convert(varchar(19),$tabla.inicio_paro_eje_65_produccion,121) as inicio_paro_eje_65_produccion, convert(varchar(19),$tabla.inicio_paro_eje_65_logistica,121) as inicio_paro_eje_65_logistica FROM $tabla WHERE id_status_eje_65 = (SELECT MAX($tabla.id_status_eje_65) FROM $tabla)");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_mantenimiento"][] = $row["status_eje_65_mantenimiento"];
            $respuesta["status_eje_65_calidad"][] = $row["status_eje_65_calidad"];
            $respuesta["status_eje_65_produccion"][] = $row["status_eje_65_produccion"];
            $respuesta["status_eje_65_logistica"][] = $row["status_eje_65_logistica"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_eje_65_mantenimiento"][] = $row["inicio_paro_eje_65_mantenimiento"];
            $respuesta["inicio_paro_eje_65_calidad"][] = $row["inicio_paro_eje_65_calidad"];
            $respuesta["inicio_paro_eje_65_produccion"][] = $row["inicio_paro_eje_65_produccion"];
            $respuesta["inicio_paro_eje_65_logistica"][] = $row["inicio_paro_eje_65_logistica"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlmostrarrateeje_65($tabla1, $tabla2, $tabla3, $tabla4){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla1.id_rate) , $tabla1.id_rate, $tabla1.id_turno, $tabla2.nombre_turno, $tabla1.id_area, $tabla3.nombre_area, $tabla1.id_estacion, $tabla4.nombre_estacion, $tabla1.rate, $tabla1.rate_desde, $tabla1.rate_hasta, $tabla1.usuario_alta, convert(char(10),$tabla1.fecha_alta,103) as fecha_alta FROM $tabla1 INNER JOIN $tabla2 ON $tabla2.id_turno = $tabla1.id_turno INNER JOIN $tabla3 ON $tabla3.id_area = $tabla1.id_area INNER JOIN $tabla4 ON $tabla4.id_estacion = $tabla1.id_estacion WHERE $tabla1.activo = '1' AND (SELECT substring(CONVERT(VARCHAR, GETDATE(), 108),0,6) AS Time ) between $tabla1.rate_desde and $tabla1.rate_hasta AND $tabla1.id_area = 2 AND $tabla1.id_estacion = 3  ORDER BY $tabla1.id_rate");
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

    static public function mdl_eje_65_producido_contador($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT
        (SELECT $tabla.acumulado_eje_65
        FROM $tabla
        WHERE id_status_eje_65 =
        (SELECT MAX($tabla.id_status_eje_65)
        FROM $tabla))as acumulado_eje_65,

    COUNT($tabla.fin_ciclo_eje_65) AS producido
    FROM $tabla
    WHERE $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:59:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:30:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME)))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:29:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:59:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:30:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME)))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:29:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["producido"][] = $row["producido"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_acumulado_contador($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT
        (SELECT $tabla.acumulado_eje_65
        FROM $tabla
        WHERE id_status_eje_65 =
        (SELECT MAX($tabla.id_status_eje_65)
        FROM $tabla))as acumulado_eje_65,

    COUNT($tabla.fin_ciclo_eje_65) AS producido
    FROM $tabla
    WHERE $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:59:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:30:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME)))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:29:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:59:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:30:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '23:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')

        OR

        $tabla.inicio_paro_fin_ciclo_eje_65 BETWEEN
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(MINUTE, +30, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME)))) AND
        (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))))
        AND $tabla.fin_ciclo_eje_65 != '0' AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '01:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '02:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '02:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '03:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '03:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '04:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '04:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '05:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '05:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '06:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '06:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '07:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '07:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '08:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '08:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '09:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '09:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '10:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '10:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '11:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '11:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '12:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '12:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '13:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '13:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '14:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '14:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '15:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '15:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '16:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '16:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '17:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '17:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '18:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '18:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '19:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '19:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '20:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '20:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '21:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '21:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:00:00.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '22:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '22:29:59.0000000') AND
        NOT((SELECT CONVERT(TIME, GETDATE()) [Current Date]) >= '23:00:00.0000000' AND (SELECT CONVERT(TIME, GETDATE()) [Current Date]) <= '00:00:00.0000000')");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["producido"][] = $row["producido"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_paros_6_7($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT $tabla.id_paro, $tabla.id_departamento_paro, $tabla.id_area, $tabla.id_estacion, $tabla.id_turno, $tabla.rate, $tabla.producido, $tabla.OEE, $tabla.acumuladas, $tabla.activo_status, CONCAT((SELECT CONVERT(CHAR(10), $tabla.inicio_paro, 103)),' ', (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.inicio_paro, 108), 0,9) AS TIME)), CONCAT((SELECT CONVERT(CHAR(10), $tabla.final_paro, 103)),' ', (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.final_paro, 108), 0,9) AS TIME)) FROM $tabla WHERE CONCAT((SELECT CONVERT(CHAR(10), $tabla.inicio_paro, 103)),' ', (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.inicio_paro, 108), 0,9) AS TIME)) >= CONCAT((SELECT CONVERT(CHAR(10), GETDATE(), 103)), ' 06:00:00') AND CONCAT((SELECT CONVERT(CHAR(10), $tabla.final_paro, 103)),' ', (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.final_paro, 108), 0,9) AS TIME)) <= CONCAT((SELECT CONVERT(CHAR(10), GETDATE(), 103)), ' 07:00:00') AND $tabla.id_paro = (SELECT MAX($tabla.id_paro) FROM $tabla) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["id_area"][] = $row["id_area"];
            $respuesta["id_estacion"][] = $row["id_estacion"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["OEE"][] = $row["OEE"];
            $respuesta["acumuladas"][] = $row["acumuladas"];
            $respuesta["inicio_paro"][] = $row["inicio_paro"];
            $respuesta["final_paro"][] = $row["final_paro"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_turno($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT id_turno FROM $tabla WHERE (SELECT SUBSTRING(CONVERT(CHAR(10), SYSDATETIME(), 108), 0,9) AS TIME) BETWEEN (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.turno_apertura, 108), 0,9) AS TIME) AND (SELECT SUBSTRING(CONVERT(CHAR(10), $tabla.turno_cierre, 108), 0,9) AS TIME)");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_turno"][] = $row["id_turno"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_insert_gen_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (id_area, id_estacion, id_turno, rate, producido, OEE, acumuladas, fecha_alta) VALUES (:id_area, :id_estacion, :id_turno, :rate, :producido, :OEE, :acumuladas, :fecha_alta)");
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":producido", $datos["producido"], PDO::PARAM_INT);
        $stmt -> bindParam(":OEE", $datos["OEE"], PDO::PARAM_STR);
        $stmt -> bindParam(":acumuladas", $datos["acumuladas"], PDO::PARAM_INT);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_eje_65_Prod_PrimerTurno_6_7($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_7_8($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_8_9($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_9_10($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_10_11($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_11_12($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_12_13($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_13_14($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:59:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_PrimerTurno_14_14_30($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:29:59.000')))AND $tabla.id_turno = '1' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_14_30_15($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:30:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_15_16($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_16_17($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_17_18($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_18_19($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_19_20($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_20_21($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_21_22($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:59:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_SegundoTurno_22_22_30($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:29:59.000')))AND $tabla.id_turno = '2' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_22_30_23($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:30:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_23_00($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_00_01($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_01_02($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_02_03($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_03_04($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_04_05($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_Prod_TercerTurno_05_05_59($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.producido, $tabla.rate, $tabla.id_turno, $tabla.fecha_alta FROM $tabla WHERE $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:59:59.000')))AND $tabla.id_turno = '3' AND  $tabla.id_turno != '0' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["producido"][] = $row["producido"];
            $respuesta["rate"][] = $row["rate"];
            $respuesta["id_turno"][] = $row["id_turno"];
            $respuesta["fecha_alta"][] = $row["fecha_alta"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_acumulado_slide_primer_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.acumuladas FROM $tabla WHERE $tabla.id_turno = '1' AND  $tabla.id_turno != '0'  AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["acumuladas"][] = $row["acumuladas"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_acumulado_slide_segundo_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.acumuladas FROM $tabla WHERE $tabla.id_turno = '2' AND  $tabla.id_turno != '0'  AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["acumuladas"][] = $row["acumuladas"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_acumulado_slide_tercer_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id), $tabla.acumuladas FROM $tabla WHERE $tabla.id_turno = '3' AND  $tabla.id_turno != '0'  AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 order by id desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id"][] = $row["id"];
            $respuesta["acumuladas"][] = $row["acumuladas"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_rateslide_primer_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT SUM($tabla.rate) AS rate FROM $tabla WHERE $tabla.rate_desde >= '06:00:00' AND  $tabla.rate_hasta <= '14:30:00' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["rate"][] = $row["rate"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_rateslide_segundo_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT SUM($tabla.rate) AS rate FROM $tabla WHERE $tabla.rate_desde >= '14:30:00' AND  $tabla.rate_hasta <= '22:30:00' AND $tabla.id_area = 2 AND $tabla.id_estacion = 3");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["rate"][] = $row["rate"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_rateslide_tercer_turno_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT TOP 1 ($tabla.id_rate), (SELECT SUM($tabla.rate) AS rate FROM $tabla WHERE $tabla.rate_desde >= '22:30:00' AND  $tabla.rate_hasta <= '23:59:59') + (SELECT SUM($tabla.rate) AS rate FROM $tabla WHERE $tabla.rate_desde >= '00:00:00' AND  $tabla.rate_hasta <= '06:00:00') as rate FROM $tabla WHERE $tabla.id_area = 2 AND $tabla.id_estacion = 3 ORDER BY $tabla.id_rate desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_rate"][] = $row["id_rate"];
            $respuesta["rate"][] = $row["rate"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_mtto_1_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_mantenimiento,
        $tabla.inicio_ciclo_eje_65, fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_mantenimiento, 121) as inicio_paro_eje_65_mantenimiento
        from $tabla
        where $tabla.status_eje_65_mantenimiento = '1' and $tabla.fin_ciclo_eje_65 = '0'
        or $tabla.inicio_ciclo_eje_65 = '0' order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_mantenimiento"][] = $row["status_eje_65_mantenimiento"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_mantenimiento"][] = $row["inicio_paro_eje_65_mantenimiento"];
            $respuesta["id"][] = "1";

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_mtto_0_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_mantenimiento,
        $tabla.inicio_ciclo_eje_65, fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_mantenimiento, 121) as inicio_paro_eje_65_mantenimiento
        from $tabla
        where $tabla.status_eje_65_mantenimiento = '0' and $tabla.fin_ciclo_eje_65 = '1'
        or $tabla.inicio_ciclo_eje_65 = '1' order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_mantenimiento"][] = $row["status_eje_65_mantenimiento"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_mantenimiento"][] = $row["inicio_paro_eje_65_mantenimiento"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_prod_1_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_produccion,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_produccion, 121) as inicio_paro_eje_65_produccion
        from $tabla
        where $tabla.status_eje_65_produccion = '1' and $tabla.fin_ciclo_eje_65 = '0'
        and $tabla.inicio_ciclo_eje_65 = '0'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_produccion"][] = $row["status_eje_65_produccion"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_produccion"][] = $row["inicio_paro_eje_65_produccion"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_prod_0_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_produccion,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_produccion, 121) as inicio_paro_eje_65_produccion
        from $tabla
        where $tabla.status_eje_65_produccion = '0' and $tabla.fin_ciclo_eje_65 = '1'
        OR $tabla.inicio_ciclo_eje_65 = '1'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_produccion"][] = $row["status_eje_65_produccion"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_produccion"][] = $row["inicio_paro_eje_65_produccion"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_cal_1_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_calidad,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_calidad, 121) as inicio_paro_eje_65_calidad
        from $tabla
        where $tabla.status_eje_65_calidad = '1' and $tabla.fin_ciclo_eje_65 = '0'
        and $tabla.inicio_ciclo_eje_65 = '0'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_calidad"][] = $row["status_eje_65_calidad"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_calidad"][] = $row["inicio_paro_eje_65_calidad"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_cal_0_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_calidad,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_calidad, 121) as inicio_paro_eje_65_calidad
        from $tabla
        where $tabla.status_eje_65_calidad = '0' and $tabla.fin_ciclo_eje_65 = '1'
        OR $tabla.inicio_ciclo_eje_65 = '1'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_calidad"][] = $row["status_eje_65_calidad"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_calidad"][] = $row["inicio_paro_eje_65_calidad"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_log_1_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_logistica,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), inicio_paro_eje_65_logistica, 121) as inicio_paro_eje_65_logistica
        from $tabla
        where $tabla.status_eje_65_logistica = '1' and $tabla.fin_ciclo_eje_65 = '0'
        and $tabla.inicio_ciclo_eje_65 = '0'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_logistica"][] = $row["status_eje_65_logistica"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_logistica"][] = $row["inicio_paro_eje_65_logistica"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_status_log_0_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select top 1($tabla.id_status_eje_65), $tabla.status_eje_65_logistica,
        $tabla.inicio_ciclo_eje_65, $tabla.fin_ciclo_eje_65, convert(varchar(19), $tabla.inicio_paro_fin_ciclo_eje_65, 121) as inicio_paro_fin_ciclo_eje_65, $tabla.acumulado_eje_65,
        convert(varchar(19), $tabla.inicio_paro_eje_65_logistica, 121) as inicio_paro_eje_65_logistica
        from $tabla
        where $tabla.status_eje_65_logistica = '0' and $tabla.fin_ciclo_eje_65 = '1'
        OR $tabla.inicio_ciclo_eje_65 = '1'  order by $tabla.id_status_eje_65 desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_status_eje_65"][] = $row["id_status_eje_65"];
            $respuesta["status_eje_65_logistica"][] = $row["status_eje_65_logistica"];
            $respuesta["inicio_ciclo_eje_65"][] = $row["inicio_ciclo_eje_65"];
            $respuesta["fin_ciclo_eje_65"][] = $row["fin_ciclo_eje_65"];
            $respuesta["inicio_paro_fin_ciclo_eje_65"][] = $row["inicio_paro_fin_ciclo_eje_65"];
            $respuesta["acumulado_eje_65"][] = $row["acumulado_eje_65"];
            $respuesta["inicio_paro_eje_65_logistica"][] = $row["inicio_paro_eje_65_logistica"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_insert_paro_status_mtto_1_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (activo_status, id_departamento_paro, id_area, id_estacion, id_turno, rate, producido, OEE, acumuladas, inicio_paro, fecha_alta) VALUES (:activo_status, :id_departamento_paro, :id_area, :id_estacion, :id_turno, :rate, :producido, :OEE, :acumuladas, :inicio_paro, :fecha_alta)");
        $stmt -> bindParam(":activo_status", $datos["activo_status"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":producido", $datos["producido"], PDO::PARAM_INT);
        $stmt -> bindParam(":OEE", $datos["OEE"], PDO::PARAM_INT);
        $stmt -> bindParam(":acumuladas", $datos["acumuladas"], PDO::PARAM_INT);
        $stmt -> bindParam(":inicio_paro", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_mtto_0_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET final_paro = :final_paro WHERE id_departamento_paro = :id_departamento_paro AND id_area = :id_area AND id_estacion = :id_estacion AND id_paro = (SELECT TOP 1 ($tabla.id_paro) FROM $tabla WHERE $tabla.id_departamento_paro = 1 AND $tabla.final_paro IS NULL ORDER BY $tabla.id_paro DESC)");
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":final_paro", $datos["final_paro"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_prod_1_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (activo_status, id_departamento_paro, id_area, id_estacion, id_turno, rate, producido, OEE, acumuladas, inicio_paro, fecha_alta) VALUES (:activo_status, :id_departamento_paro, :id_area, :id_estacion, :id_turno, :rate, :producido, :OEE, :acumuladas, :inicio_paro, :fecha_alta)");
        $stmt -> bindParam(":activo_status", $datos["activo_status"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":producido", $datos["producido"], PDO::PARAM_INT);
        $stmt -> bindParam(":OEE", $datos["OEE"], PDO::PARAM_INT);
        $stmt -> bindParam(":acumuladas", $datos["acumuladas"], PDO::PARAM_INT);
        $stmt -> bindParam(":inicio_paro", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_prod_0_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET final_paro = :final_paro WHERE id_departamento_paro = :id_departamento_paro AND id_area = :id_area AND id_estacion = :id_estacion AND id_paro = (SELECT TOP 1 ($tabla.id_paro) FROM $tabla WHERE $tabla.id_departamento_paro = 2 AND $tabla.final_paro IS NULL ORDER BY $tabla.id_paro DESC)");
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":final_paro", $datos["final_paro"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_cal_1_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (activo_status, id_departamento_paro, id_area, id_estacion, id_turno, rate, producido, OEE, acumuladas, inicio_paro, fecha_alta) VALUES (:activo_status, :id_departamento_paro, :id_area, :id_estacion, :id_turno, :rate, :producido, :OEE, :acumuladas, :inicio_paro, :fecha_alta)");
        $stmt -> bindParam(":activo_status", $datos["activo_status"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":producido", $datos["producido"], PDO::PARAM_INT);
        $stmt -> bindParam(":OEE", $datos["OEE"], PDO::PARAM_INT);
        $stmt -> bindParam(":acumuladas", $datos["acumuladas"], PDO::PARAM_INT);
        $stmt -> bindParam(":inicio_paro", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_cal_0_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET final_paro = :final_paro WHERE id_departamento_paro = :id_departamento_paro AND id_area = :id_area AND id_estacion = :id_estacion AND id_paro = (SELECT TOP 1 ($tabla.id_paro) FROM $tabla WHERE $tabla.id_departamento_paro = 3 AND $tabla.final_paro IS NULL ORDER BY $tabla.id_paro DESC)");
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":final_paro", $datos["final_paro"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_log_1_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla (activo_status, id_departamento_paro, id_area, id_estacion, id_turno, rate, producido, OEE, acumuladas, inicio_paro, fecha_alta) VALUES (:activo_status, :id_departamento_paro, :id_area, :id_estacion, :id_turno, :rate, :producido, :OEE, :acumuladas, :inicio_paro, :fecha_alta)");
        $stmt -> bindParam(":activo_status", $datos["activo_status"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_turno", $datos["id_turno"], PDO::PARAM_INT);
        $stmt -> bindParam(":rate", $datos["rate"], PDO::PARAM_INT);
        $stmt -> bindParam(":producido", $datos["producido"], PDO::PARAM_INT);
        $stmt -> bindParam(":OEE", $datos["OEE"], PDO::PARAM_INT);
        $stmt -> bindParam(":acumuladas", $datos["acumuladas"], PDO::PARAM_INT);
        $stmt -> bindParam(":inicio_paro", $datos["fecha_alta"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_alta", $datos["fecha_alta"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_insert_paro_status_log_0_eje_65($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET final_paro = :final_paro WHERE id_departamento_paro = :id_departamento_paro AND id_area = :id_area AND id_estacion = :id_estacion AND id_paro = (SELECT TOP 1 ($tabla.id_paro) FROM $tabla WHERE $tabla.id_departamento_paro = 4 AND $tabla.final_paro IS NULL ORDER BY $tabla.id_paro DESC)");
        $stmt -> bindParam(":id_departamento_paro", $datos["id_departamento_paro"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_area", $datos["id_area"], PDO::PARAM_INT);
        $stmt -> bindParam(":id_estacion", $datos["id_estacion"], PDO::PARAM_INT);
        $stmt -> bindParam(":final_paro", $datos["final_paro"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            return "error";
        }
        $stmt -> close();
        $stmt = null;
    }

    static public function mdl_mtto_correo_inf_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select $tabla.id_usuario, $tabla.nombre_completo, $tabla.correo_electronico from $tabla where activo != 0 AND $tabla.id_departamento = '1' OR $tabla.id_departamento = '5' OR $tabla.id_departamento = '6'");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_prod_correo_inf_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select $tabla.id_usuario, $tabla.nombre_completo, $tabla.correo_electronico from $tabla where activo != 0 AND $tabla.id_departamento = '2' OR $tabla.id_departamento = '5' OR $tabla.id_departamento = '6'");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_cal_correo_inf_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select $tabla.id_usuario, $tabla.nombre_completo, $tabla.correo_electronico from $tabla where activo != 0 AND $tabla.id_departamento = '3' OR $tabla.id_departamento = '5' OR $tabla.id_departamento = '6'");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_log_correo_inf_eje_65($tabla){

        $stmt = Conexion::conectar() -> prepare("select $tabla.id_usuario, $tabla.nombre_completo, $tabla.correo_electronico from $tabla where activo != 0 AND $tabla.id_departamento = '4' OR $tabla.id_departamento = '5' OR $tabla.id_departamento = '6'");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_usuario"][] = $row["id_usuario"];
            $respuesta["nombre_completo"][] = $row["nombre_completo"];
            $respuesta["correo_electronico"][] = $row["correo_electronico"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_6_7($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('06:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_7_8($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('07:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_8_9($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('08:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_9_10($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('09:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 5  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_10_11($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('10:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 5  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_11_12($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('11:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 5  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_12_13($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('12:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_13_14($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('13:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_PrimerTurno_14_14_30($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:29:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 1  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_14_30_15($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:30:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('14:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_15_16($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('15:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_16_17($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('16:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_17_18($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('17:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_18_19($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('18:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_19_20($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('19:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_20_21($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('20:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_21_22($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('21:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_SegundoTurno_22_22_30($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:29:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 2  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_22_30_23($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:30:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('22:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_23_00($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('23:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_00_01($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('00:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_01_02($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('01:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_02_03($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('02:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_03_04($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('03:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_04_05($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('04:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_status_TercerTurno_05_06($tabla){

        $stmt = Conexion::conectar() -> prepare("Select top 1 ($tabla.id_paro) ,$tabla.id_departamento_paro, datediff ( ss, $tabla.inicio_paro , $tabla.final_paro) as diferencia from $tabla where $tabla.fecha_alta BETWEEN (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:00:00.000'))) AND (SELECT CONCAT((SELECT CONVERT(VARCHAR(10), SYSDATETIME())), ' ' ,('05:59:59.000'))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3 AND $tabla.id_turno = 3  AND $tabla.final_paro != '' OR $tabla.final_paro != NULL order by diferencia desc");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["id_paro"][] = $row["id_paro"];
            $respuesta["id_departamento_paro"][] = $row["id_departamento_paro"];
            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

    static public function mdl_eje_65_tiempo_paro_hora_oee($tabla){

        $stmt = Conexion::conectar() -> prepare("SELECT sum(datediff ( ss, $tabla.inicio_paro , $tabla.final_paro)) as diferencia FROM $tabla WHERE $tabla.inicio_paro BETWEEN (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME))) AND (SELECT DATEADD(HOUR, DATEPART(HOUR, GETDATE()), DATEADD(HH, +1, CAST(CONVERT(VARCHAR(20), GETDATE(), 112) AS DATETIME)))) AND $tabla.id_area = 2 AND $tabla.id_estacion = 3");
        $stmt -> execute();
        foreach ($stmt as $row) {

            $respuesta["diferencia"][] = $row["diferencia"];

        }
        return @$respuesta;
        $stmt -> close();
        $stmt = null;

    }

}
