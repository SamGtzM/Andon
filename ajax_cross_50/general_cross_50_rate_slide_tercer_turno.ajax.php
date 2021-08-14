<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_rate_slide_tercer_turno_cross_50{

    public function rateslide_tercer_turno_cross_50(){

        $valor38 = ControladorCross_50::ctr_rateslide_tercer_turno_cross_50();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_cross_50();
$activar -> rateslide_tercer_turno_cross_50();