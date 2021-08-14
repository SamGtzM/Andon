<?php

use PHPMailer\PHPMailer\PHPMailer;

class ControladorGerencia{

    static public function ctr_gerencia_top10_llantas(){

        $tabla = "tabla_paros";
        $respuesta = ModeloGerencia::mdl_gerencia_top10_llantas($tabla);
        return $respuesta;
        
    }

    static public function ctr_gerencia_top10_eje(){

        $tabla = "tabla_paros";
        $respuesta = ModeloGerencia::mdl_gerencia_top10_eje($tabla);
        return $respuesta;
        
    }

    static public function ctr_gerencia_top10_cross(){

        $tabla = "tabla_paros";
        $respuesta = ModeloGerencia::mdl_gerencia_top10_cross($tabla);
        return $respuesta;
        
    }


    static public function ctr_gerencia_top10_metricos($id_area, $id_estacion, $id_turno){

        $tabla = "tabla_paros";
        $respuesta = ModeloGerencia::mdl_gerencia_top10_metricos($tabla, $id_area, $id_estacion, $id_turno);
        return $respuesta;
        
    }

}