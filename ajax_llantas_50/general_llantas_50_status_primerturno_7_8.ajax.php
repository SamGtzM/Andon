<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_7_8{

    public function llantas_50_status_PrimerTurno_7_8(){

        $valor48 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new llantas_status_primerturno_7_8();
$activar -> llantas_50_status_PrimerTurno_7_8();