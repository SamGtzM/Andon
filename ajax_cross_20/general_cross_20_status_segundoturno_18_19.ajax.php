<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_18_19{

    public function cross_20_status_PrimerTurno_18_19(){

        $valor60 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new cross_20_status_primerturno_18_19();
$activar -> cross_20_status_PrimerTurno_18_19();