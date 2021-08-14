<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_19_20{

    public function cross_30_status_PrimerTurno_19_20(){

        $valor61 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new cross_30_status_primerturno_19_20();
$activar -> cross_30_status_PrimerTurno_19_20();