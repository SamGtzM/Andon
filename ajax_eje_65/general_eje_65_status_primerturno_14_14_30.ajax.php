<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_14_14_30{

    public function eje_65_status_PrimerTurno_14_14_30(){

        $valor55 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_14_14_30();

        echo json_encode($valor55);    

    }

}

$activar = new eje_65_status_primerturno_14_14_30();
$activar -> eje_65_status_PrimerTurno_14_14_30();