<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_acumulado{

    public function eje_60_acumulado(){

        $valor4 = ControladorEje_60::ctr_eje_60_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new eje_60_acumulado();
$activar -> eje_60_acumulado();