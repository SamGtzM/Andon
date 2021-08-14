<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_18_19{

    public function eje_65_status_PrimerTurno_18_19(){

        $valor60 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new eje_65_status_primerturno_18_19();
$activar -> eje_65_status_PrimerTurno_18_19();