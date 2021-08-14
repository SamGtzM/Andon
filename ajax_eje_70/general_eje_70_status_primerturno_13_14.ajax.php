<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_13_14{

    public function eje_70_status_PrimerTurno_13_14(){

        $valor54 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new eje_70_status_primerturno_13_14();
$activar -> eje_70_status_PrimerTurno_13_14();