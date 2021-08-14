<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_11_12{

    public function llantas_50_status_PrimerTurno_11_12(){

        $valor52 = ControladorLlantas::ctr_llantas_50_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new llantas_status_primerturno_11_12();
$activar -> llantas_50_status_PrimerTurno_11_12();