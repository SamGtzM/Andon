<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_14_14_30{

    public function cross_20_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorCross_20::ctr_cross_20_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new cross_20_status_primerturno_14_14_30();
$activar -> cross_20_status_PrimerTurno_14_14_30();