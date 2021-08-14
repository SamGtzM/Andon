<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_producido{

    public function cross_10_producido(){

        $valor3 = ControladorCross_10::ctr_cross_10_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new cross_10_producido();
$activar -> cross_10_producido();