<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_11_12{

    public function cross_40_status_PrimerTurno_11_12(){

        $valor52 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new cross_40_status_primerturno_11_12();
$activar -> cross_40_status_PrimerTurno_11_12();