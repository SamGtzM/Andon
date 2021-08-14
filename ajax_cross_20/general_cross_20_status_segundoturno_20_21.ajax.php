<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_20_21{

    public function cross_20_status_PrimerTurno_20_21(){

        $valor62 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new cross_20_status_primerturno_20_21();
$activar -> cross_20_status_PrimerTurno_20_21();