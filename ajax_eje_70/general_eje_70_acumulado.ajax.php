<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_acumulado{

    public function eje_70_acumulado(){

        $valor4 = ControladorEje_70::ctr_eje_70_acumulado_contador();

        echo json_encode($valor4);    

    }

}

$activar = new eje_70_acumulado();
$activar -> eje_70_acumulado();