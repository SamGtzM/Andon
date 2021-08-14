<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_8_9{

    public function cross_30_status_PrimerTurno_8_9(){

        $valor49 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new cross_30_status_primerturno_8_9();
$activar -> cross_30_status_PrimerTurno_8_9();