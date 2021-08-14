<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_16_17{

    public function eje_65_status_PrimerTurno_16_17(){

        $valor58 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new eje_65_status_primerturno_16_17();
$activar -> eje_65_status_PrimerTurno_16_17();