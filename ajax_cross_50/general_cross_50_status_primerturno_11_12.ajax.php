<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_11_12{

    public function cross_50_status_PrimerTurno_11_12(){

        $valor52 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new cross_50_status_primerturno_11_12();
$activar -> cross_50_status_PrimerTurno_11_12();