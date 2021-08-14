<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_16_17{

    public function llantas_50_status_PrimerTurno_16_17(){

        $valor58 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new llantas_status_primerturno_16_17();
$activar -> llantas_50_status_PrimerTurno_16_17();