<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_acumulado{

    public function cross_50_acumulado(){

        $valor4 = ControladorCross_50::ctr_cross_50_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new cross_50_acumulado();
$activar -> cross_50_acumulado();