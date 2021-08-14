<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_12_13{

    public function eje_65_status_PrimerTurno_12_13(){

        $valor53 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_12_13();

        echo json_encode($valor53);    

    }

}

$activar = new eje_65_status_primerturno_12_13();
$activar -> eje_65_status_PrimerTurno_12_13();