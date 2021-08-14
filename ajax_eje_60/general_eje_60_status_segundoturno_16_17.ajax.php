<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_16_17{

    public function eje_60_status_PrimerTurno_16_17(){

        $valor58 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new eje_60_status_primerturno_16_17();
$activar -> eje_60_status_PrimerTurno_16_17();