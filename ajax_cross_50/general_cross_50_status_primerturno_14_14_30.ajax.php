<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_14_14_30{

    public function cross_50_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorCross_50::ctr_cross_50_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new cross_50_status_primerturno_14_14_30();
$activar -> cross_50_status_PrimerTurno_14_14_30();