<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_18_19{

    public function cross_10_status_PrimerTurno_18_19(){

        $valor60 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new cross_10_status_primerturno_18_19();
$activar -> cross_10_status_PrimerTurno_18_19();