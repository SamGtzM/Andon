<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_20_21{

    public function cross_50_status_PrimerTurno_20_21(){

        $valor62 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new cross_50_status_primerturno_20_21();
$activar -> cross_50_status_PrimerTurno_20_21();