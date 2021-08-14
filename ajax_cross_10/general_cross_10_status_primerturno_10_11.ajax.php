<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_10_11{

    public function cross_10_status_PrimerTurno_10_11(){

        $valor51 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new cross_10_status_primerturno_10_11();
$activar -> cross_10_status_PrimerTurno_10_11();