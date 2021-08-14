<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_18_19{

    public function eje_70_status_PrimerTurno_18_19(){

        $valor60 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_18_19();

        echo json_encode($valor60);    

    }

}

$activar = new eje_70_status_primerturno_18_19();
$activar -> eje_70_status_PrimerTurno_18_19();