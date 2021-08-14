<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_21_22{

    public function llantas_50_status_PrimerTurno_21_22(){

        $valor63 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new llantas_status_primerturno_21_22();
$activar -> llantas_50_status_PrimerTurno_21_22();