<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_acumulado{

    public function cross_20_acumulado(){

        $valor4 = ControladorCross_20::ctr_cross_20_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new cross_20_acumulado();
$activar -> cross_20_acumulado();