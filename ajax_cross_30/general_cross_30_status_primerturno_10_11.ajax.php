<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_10_11{

    public function cross_30_status_PrimerTurno_10_11(){

        $valor51 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new cross_30_status_primerturno_10_11();
$activar -> cross_30_status_PrimerTurno_10_11();