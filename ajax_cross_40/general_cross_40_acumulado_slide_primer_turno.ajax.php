<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_acumulado_slide_primer_turno_cross_40{

    public function acumulado_slide_primer_turno_cross_40(){

        $valor33 = ControladorCross_40::ctr_acumulado_slide_primer_turno_cross_40();

        echo json_encode($valor33);    

    }

}

$activar = new cross_acumulado_slide_primer_turno_cross_40();
$activar -> acumulado_slide_primer_turno_cross_40();