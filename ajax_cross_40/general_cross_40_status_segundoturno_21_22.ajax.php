<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_21_22{

    public function cross_40_status_PrimerTurno_21_22(){

        $valor63 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new cross_40_status_primerturno_21_22();
$activar -> cross_40_status_PrimerTurno_21_22();