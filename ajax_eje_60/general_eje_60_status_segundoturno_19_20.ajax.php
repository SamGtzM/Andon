<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_19_20{

    public function eje_60_status_PrimerTurno_19_20(){

        $valor61 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new eje_60_status_primerturno_19_20();
$activar -> eje_60_status_PrimerTurno_19_20();