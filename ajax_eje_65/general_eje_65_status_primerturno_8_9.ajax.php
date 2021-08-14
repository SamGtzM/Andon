<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_8_9{

    public function eje_65_status_PrimerTurno_8_9(){

        $valor49 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new eje_65_status_primerturno_8_9();
$activar -> eje_65_status_PrimerTurno_8_9();