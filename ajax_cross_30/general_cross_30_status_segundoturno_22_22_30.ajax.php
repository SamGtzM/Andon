<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_22_22_30{

    public function cross_30_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new cross_30_status_primerturno_22_22_30();
$activar -> cross_30_status_PrimerTurno_22_22_30();