<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_rate{

    public function cross_30_rate(){

        $valor2 = ControladorCross_30::ctrmostrarrateCross_30();

        echo json_encode($valor2);    

    }

}

$activar = new cross_30_rate();
$activar -> cross_30_rate();