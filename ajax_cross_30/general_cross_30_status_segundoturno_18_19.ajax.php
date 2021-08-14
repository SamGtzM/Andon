<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_18_19{

    public function cross_30_status_PrimerTurno_18_19(){

        $valor60 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new cross_30_status_primerturno_18_19();
$activar -> cross_30_status_PrimerTurno_18_19();