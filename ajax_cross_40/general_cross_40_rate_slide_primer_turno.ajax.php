<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_rate_slide_primer_turno_cross_40{

    public function rateslide_primer_turno_cross_40(){

        $valor36 = ControladorCross_40::ctr_rateslide_primer_turno_cross_40();

        echo json_encode($valor36);    

    }

}

$activar = new cross_rate_slide_primer_turno_cross_40();
$activar -> rateslide_primer_turno_cross_40();