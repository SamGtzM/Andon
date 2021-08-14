<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_15_16{

    public function cross_20_status_PrimerTurno_15_16(){

        $valor57 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new cross_20_status_primerturno_15_16();
$activar -> cross_20_status_PrimerTurno_15_16();