<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_12_13{

    public function cross_30_status_PrimerTurno_12_13(){

        $valor53 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new cross_30_status_primerturno_12_13();
$activar -> cross_30_status_PrimerTurno_12_13();