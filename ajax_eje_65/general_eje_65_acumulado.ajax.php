<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_acumulado{

    public function eje_65_acumulado(){

        $valor4 = ControladorEje_65::ctr_eje_65_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new eje_65_acumulado();
$activar -> eje_65_acumulado();