<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_acumulado_slide_tercer_turno_cross_30{

    public function acumulado_slide_tercer_turno_cross_30(){

        $valor35 = ControladorCross_30::ctr_acumulado_slide_tercer_turno_cross_30();

        echo json_encode($valor35);    

    }

}

$activar = new cross_acumulado_slide_tercer_turno_cross_30();
$activar -> acumulado_slide_tercer_turno_cross_30();