<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_rate_slide_primer_turno_cross_10{

    public function rateslide_primer_turno_cross_10(){

        $valor36 = ControladorCross_10::ctr_rateslide_primer_turno_cross_10();

        echo json_encode($valor36);    

    }

}

$activar = new cross_rate_slide_primer_turno_cross_10();
$activar -> rateslide_primer_turno_cross_10();