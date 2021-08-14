<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_6_7{

    public function llantas_50_status_PrimerTurno_6_7(){

        $valor47 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new llantas_status_primerturno_6_7();
$activar -> llantas_50_status_PrimerTurno_6_7();