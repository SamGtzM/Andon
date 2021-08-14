<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_13_14{

    public function cross_30_status_PrimerTurno_13_14(){

        $valor54 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new cross_30_status_primerturno_13_14();
$activar -> cross_30_status_PrimerTurno_13_14();