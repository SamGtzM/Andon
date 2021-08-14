<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_19_20{

    public function cross_50_status_PrimerTurno_19_20(){

        $valor61 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new cross_50_status_primerturno_19_20();
$activar -> cross_50_status_PrimerTurno_19_20();