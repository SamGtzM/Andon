<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_21_22{

    public function eje_65_status_PrimerTurno_21_22(){

        $valor63 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new eje_65_status_primerturno_21_22();
$activar -> eje_65_status_PrimerTurno_21_22();