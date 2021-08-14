<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_18_19{

    public function cross_40_status_PrimerTurno_18_19(){

        $valor60 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new cross_40_status_primerturno_18_19();
$activar -> cross_40_status_PrimerTurno_18_19();