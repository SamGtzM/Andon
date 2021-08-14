<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_7_8{

    public function cross_30_status_PrimerTurno_7_8(){

        $valor48 = ControladorCross_30::ctr_cross_30_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new cross_30_status_primerturno_7_8();
$activar -> cross_30_status_PrimerTurno_7_8();