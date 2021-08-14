<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_10_11{

    public function eje_65_status_PrimerTurno_10_11(){

        $valor51 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_10_11();

        echo json_encode($valor51);    

    }

}

$activar = new eje_65_status_primerturno_10_11();
$activar -> eje_65_status_PrimerTurno_10_11();