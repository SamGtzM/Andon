<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_19_20{

    public function cross_40_status_PrimerTurno_19_20(){

        $valor61 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new cross_40_status_primerturno_19_20();
$activar -> cross_40_status_PrimerTurno_19_20();