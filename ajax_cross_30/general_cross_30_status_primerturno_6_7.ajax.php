<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_6_7{

    public function cross_30_status_PrimerTurno_6_7(){

        $valor47 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new cross_30_status_primerturno_6_7();
$activar -> cross_30_status_PrimerTurno_6_7();