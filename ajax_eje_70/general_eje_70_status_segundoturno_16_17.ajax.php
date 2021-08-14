<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_16_17{

    public function eje_70_status_PrimerTurno_16_17(){

        $valor58 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new eje_70_status_primerturno_16_17();
$activar -> eje_70_status_PrimerTurno_16_17();