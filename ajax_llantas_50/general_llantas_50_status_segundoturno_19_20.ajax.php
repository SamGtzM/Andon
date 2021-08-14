<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_19_20{

    public function llantas_50_status_PrimerTurno_19_20(){

        $valor61 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new llantas_status_primerturno_19_20();
$activar -> llantas_50_status_PrimerTurno_19_20();