<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_producido{

    public function eje_70_producido(){

        $valor3 = ControladorEje_70::ctr_eje_70_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new eje_70_producido();
$activar -> eje_70_producido();