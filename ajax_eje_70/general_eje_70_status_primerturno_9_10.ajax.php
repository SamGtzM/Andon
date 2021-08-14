<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_9_10{

    public function eje_70_status_PrimerTurno_9_10(){

        $valor50 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new eje_70_status_primerturno_9_10();
$activar -> eje_70_status_PrimerTurno_9_10();