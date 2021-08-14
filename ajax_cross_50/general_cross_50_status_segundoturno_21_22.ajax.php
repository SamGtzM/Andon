<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_21_22{

    public function cross_50_status_PrimerTurno_21_22(){

        $valor63 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new cross_50_status_primerturno_21_22();
$activar -> cross_50_status_PrimerTurno_21_22();