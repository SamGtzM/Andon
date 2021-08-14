<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_rate_slide_tercer_turno_cross_20{

    public function rateslide_tercer_turno_cross_20(){

        $valor38 = ControladorCross_20::ctr_rateslide_tercer_turno_cross_20();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_cross_20();
$activar -> rateslide_tercer_turno_cross_20();