<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20{

    public function cross_20(){

        $valor = ControladorCross_20::ctr_cross_20();

        echo json_encode($valor);    

    }

}

$activar = new cross_20();
$activar -> cross_20();