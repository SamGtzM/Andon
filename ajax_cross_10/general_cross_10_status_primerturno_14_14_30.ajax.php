<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_14_14_30{

    public function cross_10_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new cross_10_status_primerturno_14_14_30();
$activar -> cross_10_status_PrimerTurno_14_14_30();