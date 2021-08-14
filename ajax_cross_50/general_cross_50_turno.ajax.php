<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class llantas_turno_cross_50{

    public function cross_50_turno_cross_50(){

        $valor5 = ControladorCross_50::ctr_cross_50_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_cross_50();
$activar -> cross_50_turno_cross_50();