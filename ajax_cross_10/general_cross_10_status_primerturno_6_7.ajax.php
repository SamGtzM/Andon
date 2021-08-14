<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_6_7{

    public function cross_10_status_PrimerTurno_6_7(){

        $valor47 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new cross_10_status_primerturno_6_7();
$activar -> cross_10_status_PrimerTurno_6_7();