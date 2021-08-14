<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_6_7{

    public function eje_65_status_PrimerTurno_6_7(){

        $valor47 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new eje_65_status_primerturno_6_7();
$activar -> eje_65_status_PrimerTurno_6_7();