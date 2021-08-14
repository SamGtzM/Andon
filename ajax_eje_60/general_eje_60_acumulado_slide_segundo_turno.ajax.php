<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_acumulado_slide_segunto_turno_eje_60{

    public function acumulado_slide_segundo_turno_eje_60(){

        $valor34 = ControladorEje_60::ctr_acumulado_slide_segundo_turno_eje_60();

        echo json_encode($valor34);    

    }

}

$activar = new cross_acumulado_slide_segunto_turno_eje_60();
$activar -> acumulado_slide_segundo_turno_eje_60();