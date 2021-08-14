<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_9_10{

    public function cross_10_status_PrimerTurno_9_10(){

        $valor50 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new cross_10_status_primerturno_9_10();
$activar -> cross_10_status_PrimerTurno_9_10();