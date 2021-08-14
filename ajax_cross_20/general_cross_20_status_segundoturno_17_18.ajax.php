<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_17_18{

    public function cross_20_status_PrimerTurno_17_18(){

        $valor59 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new cross_20_status_primerturno_17_18();
$activar -> cross_20_status_PrimerTurno_17_18();