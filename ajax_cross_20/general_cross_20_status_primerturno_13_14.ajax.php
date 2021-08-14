<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_13_14{

    public function cross_20_status_PrimerTurno_13_14(){

        $valor54 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new cross_20_status_primerturno_13_14();
$activar -> cross_20_status_PrimerTurno_13_14();