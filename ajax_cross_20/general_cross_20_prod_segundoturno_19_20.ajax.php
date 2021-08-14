<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_segundoturno_19_20_cross_20{

    public function cross_20_Prod_SegundoTurno_19_20(){

        $valor21 = ControladorCross_20::ctr_cross_20_Prod_SegundoTurno_19_20();

        echo json_encode($valor21);    

    }

}

$activar = new cross_producido_segundoturno_19_20_cross_20();
$activar -> cross_20_Prod_SegundoTurno_19_20();