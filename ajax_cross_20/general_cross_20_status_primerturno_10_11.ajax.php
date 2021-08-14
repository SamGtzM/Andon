<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_10_11{

    public function cross_20_status_PrimerTurno_10_11(){

        $valor51 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new cross_20_status_primerturno_10_11();
$activar -> cross_20_status_PrimerTurno_10_11();