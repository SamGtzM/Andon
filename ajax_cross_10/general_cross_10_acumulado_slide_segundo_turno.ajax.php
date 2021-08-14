<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_acumulado_slide_segunto_turno_cross_10{

    public function acumulado_slide_segundo_turno_cross_10(){

        $valor34 = ControladorCross_10::ctr_acumulado_slide_segundo_turno_cross_10();

        echo json_encode($valor34);    

    }

}

$activar = new cross_acumulado_slide_segunto_turno_cross_10();
$activar -> acumulado_slide_segundo_turno_cross_10();