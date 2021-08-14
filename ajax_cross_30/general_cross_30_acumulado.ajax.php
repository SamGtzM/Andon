<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_acumulado{

    public function cross_30_acumulado(){

        $valor4 = ControladorCross_30::ctr_cross_30_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new cross_30_acumulado();
$activar -> cross_30_acumulado();