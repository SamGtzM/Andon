<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_acumulado_slide_primer_turno_cross_10{

    public function acumulado_slide_primer_turno_cross_10(){

        $valor33 = ControladorCross_10::ctr_acumulado_slide_primer_turno_cross_10();

        echo json_encode($valor33);    

    }

}

$activar = new cross_acumulado_slide_primer_turno_cross_10();
$activar -> acumulado_slide_primer_turno_cross_10();