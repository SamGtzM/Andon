<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_22_22_30{

    public function cross_50_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new cross_50_status_primerturno_22_22_30();
$activar -> cross_50_status_PrimerTurno_22_22_30();