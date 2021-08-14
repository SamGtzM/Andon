<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_14_30_15{

    public function cross_30_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new cross_30_status_primerturno_14_30_15();
$activar -> cross_30_status_PrimerTurno_14_30_15();