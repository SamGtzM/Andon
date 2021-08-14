<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_17_18{

    public function cross_40_status_PrimerTurno_17_18(){

        $valor59 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new cross_40_status_primerturno_17_18();
$activar -> cross_40_status_PrimerTurno_17_18();