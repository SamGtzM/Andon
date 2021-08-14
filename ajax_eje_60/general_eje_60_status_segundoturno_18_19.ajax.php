<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_18_19{

    public function eje_60_status_PrimerTurno_18_19(){

        $valor60 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new eje_60_status_primerturno_18_19();
$activar -> eje_60_status_PrimerTurno_18_19();