<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_acumulado{

    public function llantas_50_acumulado(){

        $valor4 = ControladorLlantas::ctr_llantas_50_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new llantas_acumulado();
$activar -> llantas_50_acumulado();