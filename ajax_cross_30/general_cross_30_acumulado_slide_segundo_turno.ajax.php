<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_acumulado_slide_segunto_turno_cross_30{

    public function acumulado_slide_segundo_turno_cross_30(){

        $valor34 = ControladorCross_30::ctr_acumulado_slide_segundo_turno_cross_30();

        echo json_encode($valor34);    

    }

}

$activar = new cross_acumulado_slide_segunto_turno_cross_30();
$activar -> acumulado_slide_segundo_turno_cross_30();