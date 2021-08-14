<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_14_14_30{

    public function eje_60_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new eje_60_status_primerturno_14_14_30();
$activar -> eje_60_status_PrimerTurno_14_14_30();