<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_9_10{

    public function cross_50_status_PrimerTurno_9_10(){

        $valor50 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new cross_50_status_primerturno_9_10();
$activar -> cross_50_status_PrimerTurno_9_10();