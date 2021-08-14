<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30{

    public function cross_30(){

        $valor = ControladorCross_30::ctr_cross_30();

        echo json_encode($valor);    

    }

}

$activar = new cross_30();
$activar -> cross_30();