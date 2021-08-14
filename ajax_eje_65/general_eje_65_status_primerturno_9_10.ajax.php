<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_9_10{

    public function eje_65_status_PrimerTurno_9_10(){

        $valor50 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new eje_65_status_primerturno_9_10();
$activar -> eje_65_status_PrimerTurno_9_10();