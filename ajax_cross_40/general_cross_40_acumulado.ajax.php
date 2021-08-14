<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_acumulado{

    public function cross_40_acumulado(){

        $valor4 = ControladorCross_40::ctr_cross_40_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new cross_40_acumulado();
$activar -> cross_40_acumulado();