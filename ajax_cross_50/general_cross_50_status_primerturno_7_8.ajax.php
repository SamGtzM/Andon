<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_7_8{

    public function cross_50_status_PrimerTurno_7_8(){

        $valor48 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new cross_50_status_primerturno_7_8();
$activar -> cross_50_status_PrimerTurno_7_8();