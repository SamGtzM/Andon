<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_segundoturno_16_17_cross_20{

    public function cross_20_Prod_SegundoTurno_16_17(){

        $valor18 = ControladorCross_20::ctr_cross_20_Prod_SegundoTurno_16_17();

        echo json_encode($valor18);    

    }

}

$activar = new cross_producido_segundoturno_16_17_cross_20();
$activar -> cross_20_Prod_SegundoTurno_16_17();