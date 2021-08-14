<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_10_11{

    public function eje_60_status_PrimerTurno_10_11(){

        $valor51 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new eje_60_status_primerturno_10_11();
$activar -> eje_60_status_PrimerTurno_10_11();