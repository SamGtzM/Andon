<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_15_16{

    public function cross_30_status_PrimerTurno_15_16(){

        $valor57 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new cross_30_status_primerturno_15_16();
$activar -> cross_30_status_PrimerTurno_15_16();