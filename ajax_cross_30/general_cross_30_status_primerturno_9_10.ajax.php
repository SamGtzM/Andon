<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_9_10{

    public function cross_30_status_PrimerTurno_9_10(){

        $valor50 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new cross_30_status_primerturno_9_10();
$activar -> cross_30_status_PrimerTurno_9_10();