<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_19_20{

    public function cross_20_status_PrimerTurno_19_20(){

        $valor61 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new cross_20_status_primerturno_19_20();
$activar -> cross_20_status_PrimerTurno_19_20();