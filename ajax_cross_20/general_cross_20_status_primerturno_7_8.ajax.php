<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_7_8{

    public function cross_20_status_PrimerTurno_7_8(){

        $valor48 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new cross_20_status_primerturno_7_8();
$activar -> cross_20_status_PrimerTurno_7_8();