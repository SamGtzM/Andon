<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_6_7{

    public function eje_70_status_PrimerTurno_6_7(){

        $valor47 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_6_7();

        echo json_encode($valor47);    

    }

}

$activar = new eje_70_status_primerturno_6_7();
$activar -> eje_70_status_PrimerTurno_6_7();