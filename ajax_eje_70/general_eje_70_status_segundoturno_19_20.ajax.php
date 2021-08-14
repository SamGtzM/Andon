<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_19_20{

    public function eje_70_status_PrimerTurno_19_20(){

        $valor61 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_19_20();

        echo json_encode($valor61);    

    }

}

$activar = new eje_70_status_primerturno_19_20();
$activar -> eje_70_status_PrimerTurno_19_20();