<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_acumulado{

    public function cross_10_acumulado(){

        $valor4 = ControladorCross_10::ctr_cross_10_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new cross_10_acumulado();
$activar -> cross_10_acumulado();