<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_17_18{

    public function llantas_50_status_PrimerTurno_17_18(){

        $valor59 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new llantas_status_primerturno_17_18();
$activar -> llantas_50_status_PrimerTurno_17_18();