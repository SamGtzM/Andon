<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_8_9{

    public function eje_70_status_PrimerTurno_8_9(){

        $valor49 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_8_9();

        echo json_encode($valor49);    

    }

}

$activar = new eje_70_status_primerturno_8_9();
$activar -> eje_70_status_PrimerTurno_8_9();