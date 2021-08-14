<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_11_12{

    public function cross_30_status_PrimerTurno_11_12(){

        $valor52 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new cross_30_status_primerturno_11_12();
$activar -> cross_30_status_PrimerTurno_11_12();