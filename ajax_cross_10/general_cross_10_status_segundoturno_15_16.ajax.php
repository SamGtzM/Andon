<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_15_16{

    public function cross_10_status_PrimerTurno_15_16(){

        $valor57 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new cross_10_status_primerturno_15_16();
$activar -> cross_10_status_PrimerTurno_15_16();