<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_19_20{

    public function cross_10_status_PrimerTurno_19_20(){

        $valor61 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new cross_10_status_primerturno_19_20();
$activar -> cross_10_status_PrimerTurno_19_20();