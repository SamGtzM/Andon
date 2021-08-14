<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_producido{

    public function cross_20_producido(){

        $valor3 = ControladorCross_20::ctr_cross_20_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new cross_20_producido();
$activar -> cross_20_producido();