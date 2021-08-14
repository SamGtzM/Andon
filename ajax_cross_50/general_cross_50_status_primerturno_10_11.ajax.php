<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_10_11{

    public function cross_50_status_PrimerTurno_10_11(){

        $valor51 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new cross_50_status_primerturno_10_11();
$activar -> cross_50_status_PrimerTurno_10_11();