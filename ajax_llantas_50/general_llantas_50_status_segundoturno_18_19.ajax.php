<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_18_19{

    public function llantas_50_status_PrimerTurno_18_19(){

        $valor60 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new llantas_status_primerturno_18_19();
$activar -> llantas_50_status_PrimerTurno_18_19();