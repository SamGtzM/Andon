<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_13_14{

    public function eje_60_status_PrimerTurno_13_14(){

        $valor54 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new eje_60_status_primerturno_13_14();
$activar -> eje_60_status_PrimerTurno_13_14();