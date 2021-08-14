<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_6_7{

    public function eje_60_status_PrimerTurno_6_7(){

        $valor47 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new eje_60_status_primerturno_6_7();
$activar -> eje_60_status_PrimerTurno_6_7();