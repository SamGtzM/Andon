<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_rate{

    public function cross_10_rate(){

        $valor2 = ControladorCross_10::ctrmostrarrateCross_10();

        echo json_encode($valor2);    

    }

}

$activar = new cross_10_rate();
$activar -> cross_10_rate();