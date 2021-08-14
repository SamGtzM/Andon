<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_10_11{

    public function eje_70_status_PrimerTurno_10_11(){

        $valor51 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new eje_70_status_primerturno_10_11();
$activar -> eje_70_status_PrimerTurno_10_11();