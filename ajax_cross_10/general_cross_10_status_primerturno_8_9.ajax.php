<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_8_9{

    public function cross_10_status_PrimerTurno_8_9(){

        $valor49 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new cross_10_status_primerturno_8_9();
$activar -> cross_10_status_PrimerTurno_8_9();