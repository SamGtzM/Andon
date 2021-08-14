<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_12_13{

    public function cross_20_status_PrimerTurno_12_13(){

        $valor53 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new cross_20_status_primerturno_12_13();
$activar -> cross_20_status_PrimerTurno_12_13();