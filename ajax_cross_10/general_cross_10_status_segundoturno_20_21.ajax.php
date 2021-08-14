<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_20_21{

    public function cross_10_status_PrimerTurno_20_21(){

        $valor62 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new cross_10_status_primerturno_20_21();
$activar -> cross_10_status_PrimerTurno_20_21();