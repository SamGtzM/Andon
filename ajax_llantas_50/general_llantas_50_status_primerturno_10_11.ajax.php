<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_10_11{

    public function llantas_50_status_PrimerTurno_10_11(){

        $valor51 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new llantas_status_primerturno_10_11();
$activar -> llantas_50_status_PrimerTurno_10_11();