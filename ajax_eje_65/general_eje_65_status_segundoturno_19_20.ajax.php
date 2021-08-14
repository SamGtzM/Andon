<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_19_20{

    public function eje_65_status_PrimerTurno_19_20(){

        $valor61 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new eje_65_status_primerturno_19_20();
$activar -> eje_65_status_PrimerTurno_19_20();