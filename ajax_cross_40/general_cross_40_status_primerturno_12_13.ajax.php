<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_12_13{

    public function cross_40_status_PrimerTurno_12_13(){

        $valor53 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new cross_40_status_primerturno_12_13();
$activar -> cross_40_status_PrimerTurno_12_13();