<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_22_22_30{

    public function cross_40_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new cross_40_status_primerturno_22_22_30();
$activar -> cross_40_status_PrimerTurno_22_22_30();