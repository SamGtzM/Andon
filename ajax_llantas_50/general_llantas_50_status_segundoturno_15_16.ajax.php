<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_15_16{

    public function llantas_50_status_PrimerTurno_15_16(){

        $valor57 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new llantas_status_primerturno_15_16();
$activar -> llantas_50_status_PrimerTurno_15_16();