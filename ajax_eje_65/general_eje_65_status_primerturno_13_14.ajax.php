<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_13_14{

    public function eje_65_status_PrimerTurno_13_14(){

        $valor54 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_13_14();

        echo json_encode($valor54);    

    }

}

$activar = new eje_65_status_primerturno_13_14();
$activar -> eje_65_status_PrimerTurno_13_14();