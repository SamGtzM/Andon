<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_13_14{

    public function cross_40_status_PrimerTurno_13_14(){

        $valor54 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new cross_40_status_primerturno_13_14();
$activar -> cross_40_status_PrimerTurno_13_14();