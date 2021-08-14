<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class llantas_turno_cross_20{

    public function cross_20_turno_cross_20(){

        $valor5 = ControladorCross_20::ctr_cross_20_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_cross_20();
$activar -> cross_20_turno_cross_20();