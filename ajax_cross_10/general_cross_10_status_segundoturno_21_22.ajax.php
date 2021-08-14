<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_21_22{

    public function cross_10_status_PrimerTurno_21_22(){

        $valor63 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new cross_10_status_primerturno_21_22();
$activar -> cross_10_status_PrimerTurno_21_22();