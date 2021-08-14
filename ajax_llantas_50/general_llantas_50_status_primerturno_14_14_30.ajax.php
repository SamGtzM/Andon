<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_14_14_30{

    public function llantas_50_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new llantas_status_primerturno_14_14_30();
$activar -> llantas_50_status_PrimerTurno_14_14_30();