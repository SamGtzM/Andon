<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_rate{

    public function cross_40_rate(){

        $valor2 = ControladorCross_40::ctrmostrarrateCross_40();

        echo json_encode($valor2);    

    }

}

$activar = new cross_40_rate();
$activar -> cross_40_rate();