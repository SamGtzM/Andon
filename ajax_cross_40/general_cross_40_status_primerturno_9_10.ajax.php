<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_9_10{

    public function cross_40_status_PrimerTurno_9_10(){

        $valor50 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new cross_40_status_primerturno_9_10();
$activar -> cross_40_status_PrimerTurno_9_10();