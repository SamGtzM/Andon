<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_6_7{

    public function cross_40_status_PrimerTurno_6_7(){

        $valor47 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new cross_40_status_primerturno_6_7();
$activar -> cross_40_status_PrimerTurno_6_7();