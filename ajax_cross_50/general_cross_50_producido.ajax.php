<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_producido{

    public function cross_50_producido(){

        $valor3 = ControladorCross_50::ctr_cross_50_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new cross_50_producido();
$activar -> cross_50_producido();