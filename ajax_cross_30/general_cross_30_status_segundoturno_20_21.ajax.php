<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_20_21{

    public function cross_30_status_PrimerTurno_20_21(){

        $valor62 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new cross_30_status_primerturno_20_21();
$activar -> cross_30_status_PrimerTurno_20_21();