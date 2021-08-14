<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_7_8{

    public function cross_40_status_PrimerTurno_7_8(){

        $valor48 = ControladorCross_40::ctr_cross_40_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new cross_40_status_primerturno_7_8();
$activar -> cross_40_status_PrimerTurno_7_8();