<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_8_9{

    public function cross_20_status_PrimerTurno_8_9(){

        $valor49 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new cross_20_status_primerturno_8_9();
$activar -> cross_20_status_PrimerTurno_8_9();