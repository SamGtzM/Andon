<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_6_7{

    public function cross_20_status_PrimerTurno_6_7(){

        $valor47 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new cross_20_status_primerturno_6_7();
$activar -> cross_20_status_PrimerTurno_6_7();