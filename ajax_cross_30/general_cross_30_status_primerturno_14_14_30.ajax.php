<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_14_14_30{

    public function cross_30_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new cross_30_status_primerturno_14_14_30();
$activar -> cross_30_status_PrimerTurno_14_14_30();