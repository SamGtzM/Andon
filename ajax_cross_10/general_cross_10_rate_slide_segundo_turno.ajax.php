<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_rate_slide_segundo_turno_cross_10{

    public function rateslide_segundo_turno(){

        $valor37 = ControladorCross_10::ctr_rateslide_segundo_turno_cross_10();

        echo json_encode($valor37);    

    }

}

$activar = new cross_rate_slide_segundo_turno_cross_10();
$activar -> rateslide_segundo_turno();