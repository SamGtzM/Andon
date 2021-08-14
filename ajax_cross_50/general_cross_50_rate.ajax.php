<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_rate{

    public function cross_50_rate(){

        $valor2 = ControladorCross_50::ctrmostrarrateCross_50();

        echo json_encode($valor2);    

    }

}

$activar = new cross_50_rate();
$activar -> cross_50_rate();