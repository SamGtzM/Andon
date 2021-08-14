<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_segundoturno_18_19_cross_20{

    public function cross_20_Prod_SegundoTurno_18_19(){

        $valor20 = ControladorCross_20::ctr_cross_20_Prod_SegundoTurno_18_19();

        echo json_encode($valor20);    

    }

}

$activar = new cross_producido_segundoturno_18_19_cross_20();
$activar -> cross_20_Prod_SegundoTurno_18_19();