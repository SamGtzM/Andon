<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_21_22{

    public function eje_60_status_PrimerTurno_21_22(){

        $valor63 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new eje_60_status_primerturno_21_22();
$activar -> eje_60_status_PrimerTurno_21_22();