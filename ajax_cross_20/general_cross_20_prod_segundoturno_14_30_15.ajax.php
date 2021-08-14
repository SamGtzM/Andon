<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_segundoturno_14_30_15_cross_20{

    public function cross_20_Prod_SegundoTurno_14_30_15(){

        $valor16 = ControladorCross_20::ctr_cross_20_Prod_SegundoTurno_14_30_15();

        echo json_encode($valor16);    

    }

}

$activar = new cross_producido_segundoturno_14_30_15_cross_20();
$activar -> cross_20_Prod_SegundoTurno_14_30_15();