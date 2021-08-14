<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_6_7{

    public function cross_50_status_PrimerTurno_6_7(){

        $valor47 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new cross_50_status_primerturno_6_7();
$activar -> cross_50_status_PrimerTurno_6_7();