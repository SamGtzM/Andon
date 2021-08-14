<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_17_18{

    public function cross_10_status_PrimerTurno_17_18(){

        $valor59 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new cross_10_status_primerturno_17_18();
$activar -> cross_10_status_PrimerTurno_17_18();