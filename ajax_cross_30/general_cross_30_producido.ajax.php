<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_producido{

    public function cross_30_producido(){

        $valor3 = ControladorCross_30::ctr_cross_30_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new cross_30_producido();
$activar -> cross_30_producido();