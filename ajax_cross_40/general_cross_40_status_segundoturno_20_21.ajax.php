<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_20_21{

    public function cross_40_status_PrimerTurno_20_21(){

        $valor62 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new cross_40_status_primerturno_20_21();
$activar -> cross_40_status_PrimerTurno_20_21();