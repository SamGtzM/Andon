<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_20_21{

    public function llantas_50_status_PrimerTurno_20_21(){

        $valor62 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new llantas_status_primerturno_20_21();
$activar -> llantas_50_status_PrimerTurno_20_21();