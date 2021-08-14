<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_8_9{

    public function cross_40_status_PrimerTurno_8_9(){

        $valor49 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new cross_40_status_primerturno_8_9();
$activar -> cross_40_status_PrimerTurno_8_9();