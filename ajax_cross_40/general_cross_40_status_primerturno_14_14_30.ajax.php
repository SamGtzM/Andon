<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_14_14_30{

    public function cross_40_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new cross_40_status_primerturno_14_14_30();
$activar -> cross_40_status_PrimerTurno_14_14_30();