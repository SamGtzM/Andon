<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_12_13{

    public function cross_50_status_PrimerTurno_12_13(){

        $valor53 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new cross_50_status_primerturno_12_13();
$activar -> cross_50_status_PrimerTurno_12_13();