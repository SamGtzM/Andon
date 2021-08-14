<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_primerturno_14_30_15{

    public function llantas_50_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorLlantas::ctr_llantas_50_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new llantas_status_primerturno_14_30_15();
$activar -> llantas_50_status_PrimerTurno_14_30_15();