<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_13_14{

    public function llantas_50_status_PrimerTurno_13_14(){

        $valor54 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new llantas_status_primerturno_13_14();
$activar -> llantas_50_status_PrimerTurno_13_14();