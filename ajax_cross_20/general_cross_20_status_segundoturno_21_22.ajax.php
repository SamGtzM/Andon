<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_21_22{

    public function cross_20_status_PrimerTurno_21_22(){

        $valor63 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new cross_20_status_primerturno_21_22();
$activar -> cross_20_status_PrimerTurno_21_22();