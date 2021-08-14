<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class llantas_turno_cross_40{

    public function cross_40_turno_cross_40(){

        $valor5 = ControladorCross_40::ctr_cross_40_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_cross_40();
$activar -> cross_40_turno_cross_40();