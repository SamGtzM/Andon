<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_turno_cross_10{

    public function cross_10_turno_cross_10(){

        $valor5 = ControladorCross_10::ctr_cross_10_turno();

        echo json_encode($valor5);

    }

}

$activar = new cross_turno_cross_10();
$activar -> cross_10_turno_cross_10();
