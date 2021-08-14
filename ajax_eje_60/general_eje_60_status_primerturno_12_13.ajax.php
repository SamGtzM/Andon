<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_12_13{

    public function eje_60_status_PrimerTurno_12_13(){

        $valor53 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new eje_60_status_primerturno_12_13();
$activar -> eje_60_status_PrimerTurno_12_13();