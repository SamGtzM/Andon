<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_14_30_15{

    public function cross_50_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new cross_50_status_primerturno_14_30_15();
$activar -> cross_50_status_PrimerTurno_14_30_15();