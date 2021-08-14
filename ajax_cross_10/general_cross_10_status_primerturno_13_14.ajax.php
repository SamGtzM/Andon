<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_13_14{

    public function cross_10_status_PrimerTurno_13_14(){

        $valor54 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new cross_10_status_primerturno_13_14();
$activar -> cross_10_status_PrimerTurno_13_14();