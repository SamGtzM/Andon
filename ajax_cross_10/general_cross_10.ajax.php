<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10{

    public function cross_10(){

        $valor = ControladorCross_10::ctr_cross_10();

        echo json_encode($valor);    

    }

}

$activar = new cross_10();
$activar -> cross_10();