<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_12_13{

    public function cross_10_status_PrimerTurno_12_13(){

        $valor53 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new cross_10_status_primerturno_12_13();
$activar -> cross_10_status_PrimerTurno_12_13();