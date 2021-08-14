<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_13_14{

    public function cross_50_status_PrimerTurno_13_14(){

        $valor54 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new cross_50_status_primerturno_13_14();
$activar -> cross_50_status_PrimerTurno_13_14();