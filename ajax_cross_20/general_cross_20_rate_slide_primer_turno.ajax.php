<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_rate_slide_primer_turno_cross_20{

    public function rateslide_primer_turno_cross_20(){

        $valor36 = ControladorCross_20::ctr_rateslide_primer_turno_cross_20();

        echo json_encode($valor36);    

    }

}

$activar = new cross_rate_slide_primer_turno_cross_20();
$activar -> rateslide_primer_turno_cross_20();