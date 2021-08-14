<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_rate{

    public function cross_20_rate(){

        $valor2 = ControladorCross_20::ctrmostrarrateCross_20();

        echo json_encode($valor2);    

    }

}

$activar = new cross_20_rate();
$activar -> cross_20_rate();