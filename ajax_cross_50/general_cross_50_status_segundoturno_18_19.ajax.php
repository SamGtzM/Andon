<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_18_19{

    public function cross_50_status_PrimerTurno_18_19(){

        $valor60 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new cross_50_status_primerturno_18_19();
$activar -> cross_50_status_PrimerTurno_18_19();