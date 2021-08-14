<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_22_22_30{

    public function llantas_50_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new llantas_status_primerturno_22_22_30();
$activar -> llantas_50_status_PrimerTurno_22_22_30();