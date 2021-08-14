<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_acumulado_slide_tercer_turno_cross_10{

    public function acumulado_slide_tercer_turno_cross_10(){

        $valor35 = ControladorCross_10::ctr_acumulado_slide_tercer_turno_cross_10();

        echo json_encode($valor35);    

    }

}

$activar = new cross_acumulado_slide_tercer_turno_cross_10();
$activar -> acumulado_slide_tercer_turno_cross_10();