<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_17_18{

    public function cross_30_status_PrimerTurno_17_18(){

        $valor59 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new cross_30_status_primerturno_17_18();
$activar -> cross_30_status_PrimerTurno_17_18();