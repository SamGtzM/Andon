<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_22_22_30{

    public function eje_70_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new eje_70_status_primerturno_22_22_30();
$activar -> eje_70_status_PrimerTurno_22_22_30();