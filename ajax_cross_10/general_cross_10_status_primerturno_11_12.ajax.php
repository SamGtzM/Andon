<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_11_12{

    public function cross_10_status_PrimerTurno_11_12(){

        $valor52 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new cross_10_status_primerturno_11_12();
$activar -> cross_10_status_PrimerTurno_11_12();