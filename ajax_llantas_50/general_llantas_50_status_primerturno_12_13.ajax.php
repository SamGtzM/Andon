<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_12_13{

    public function llantas_50_status_PrimerTurno_12_13(){

        $valor53 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new llantas_status_primerturno_12_13();
$activar -> llantas_50_status_PrimerTurno_12_13();