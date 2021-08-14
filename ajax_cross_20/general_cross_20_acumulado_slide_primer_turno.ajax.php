<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_acumulado_slide_primer_turno_cross_20{

    public function acumulado_slide_primer_turno_cross_20(){

        $valor33 = ControladorCross_20::ctr_acumulado_slide_primer_turno_cross_20();

        echo json_encode($valor33);    

    }

}

$activar = new cross_acumulado_slide_primer_turno_cross_20();
$activar -> acumulado_slide_primer_turno_cross_20();