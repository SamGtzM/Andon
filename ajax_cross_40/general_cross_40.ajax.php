<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40{

    public function cross_40(){

        $valor = ControladorCross_40::ctr_cross_40();

        echo json_encode($valor);    

    }

}

$activar = new cross_40();
$activar -> cross_40();