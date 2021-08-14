<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_8_9{

    public function eje_60_status_PrimerTurno_8_9(){

        $valor49 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new eje_60_status_primerturno_8_9();
$activar -> eje_60_status_PrimerTurno_8_9();