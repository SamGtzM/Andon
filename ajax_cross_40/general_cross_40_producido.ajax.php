<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_producido{

    public function cross_40_producido(){

        $valor3 = ControladorCross_40::ctr_cross_40_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new cross_40_producido();
$activar -> cross_40_producido();