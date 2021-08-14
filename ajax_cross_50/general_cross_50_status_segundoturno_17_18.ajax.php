<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_17_18{

    public function cross_50_status_PrimerTurno_17_18(){

        $valor59 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new cross_50_status_primerturno_17_18();
$activar -> cross_50_status_PrimerTurno_17_18();