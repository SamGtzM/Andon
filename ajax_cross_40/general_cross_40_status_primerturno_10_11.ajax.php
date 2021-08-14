<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_10_11{

    public function cross_40_status_PrimerTurno_10_11(){

        $valor51 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new cross_40_status_primerturno_10_11();
$activar -> cross_40_status_PrimerTurno_10_11();