<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_7_8{

    public function cross_10_status_PrimerTurno_7_8(){

        $valor48 = ControladorCross_10::ctr_cross_10_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new cross_10_status_primerturno_7_8();
$activar -> cross_10_status_PrimerTurno_7_8();