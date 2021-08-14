<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_rate_slide_primer_turno_cross_30{

    public function rateslide_primer_turno_cross_30(){

        $valor36 = ControladorCross_30::ctr_rateslide_primer_turno_cross_30();

        echo json_encode($valor36);    

    }

}

$activar = new cross_rate_slide_primer_turno_cross_30();
$activar -> rateslide_primer_turno_cross_30();