<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_14_30_15{

    public function cross_10_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new cross_10_status_primerturno_14_30_15();
$activar -> cross_10_status_PrimerTurno_14_30_15();