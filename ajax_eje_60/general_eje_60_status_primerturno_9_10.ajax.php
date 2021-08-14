<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_9_10{

    public function eje_60_status_PrimerTurno_9_10(){

        $valor50 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_9_10();

        echo json_encode($valor50);    

    }

}

$activar = new eje_60_status_primerturno_9_10();
$activar -> eje_60_status_PrimerTurno_9_10();