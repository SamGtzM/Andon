<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_acumulado_slide_segunto_turno_cross_50{

    public function acumulado_slide_segundo_turno_cross_50(){

        $valor34 = ControladorCross_50::ctr_acumulado_slide_segundo_turno_cross_50();

        echo json_encode($valor34);    

    }

}

$activar = new cross_acumulado_slide_segunto_turno_cross_50();
$activar -> acumulado_slide_segundo_turno_cross_50();