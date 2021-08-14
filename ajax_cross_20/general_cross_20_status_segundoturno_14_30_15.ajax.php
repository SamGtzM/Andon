<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_14_30_15{

    public function cross_20_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new cross_20_status_primerturno_14_30_15();
$activar -> cross_20_status_PrimerTurno_14_30_15();