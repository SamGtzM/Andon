<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_15_16{

    public function cross_40_status_PrimerTurno_15_16(){

        $valor57 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new cross_40_status_primerturno_15_16();
$activar -> cross_40_status_PrimerTurno_15_16();