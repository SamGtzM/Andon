<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_9_10{

    public function llantas_50_status_PrimerTurno_9_10(){

        $valor50 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new llantas_status_primerturno_9_10();
$activar -> llantas_50_status_PrimerTurno_9_10();