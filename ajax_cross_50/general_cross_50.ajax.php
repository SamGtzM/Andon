<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50{

    public function cross_50(){

        $valor = ControladorCross_50::ctr_cross_50();

        echo json_encode($valor);    

    }

}

$activar = new cross_50();
$activar -> cross_50();