<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_8_9{

    public function llantas_50_status_PrimerTurno_8_9(){

        $valor49 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new llantas_status_primerturno_8_9();
$activar -> llantas_50_status_PrimerTurno_8_9();