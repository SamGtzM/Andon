<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_rate_slide_tercer_turno_cross_40{

    public function rateslide_tercer_turno_cross_40(){

        $valor38 = ControladorCross_40::ctr_rateslide_tercer_turno_cross_40();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_cross_40();
$activar -> rateslide_tercer_turno_cross_40();