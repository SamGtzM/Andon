<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_9_10{

    public function cross_20_status_PrimerTurno_9_10(){

        $valor50 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new cross_20_status_primerturno_9_10();
$activar -> cross_20_status_PrimerTurno_9_10();