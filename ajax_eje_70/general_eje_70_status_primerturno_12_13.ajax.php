<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_12_13{

    public function eje_70_status_PrimerTurno_12_13(){

        $valor53 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new eje_70_status_primerturno_12_13();
$activar -> eje_70_status_PrimerTurno_12_13();