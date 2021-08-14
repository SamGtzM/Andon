<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_segundoturno_14_30_15_cross_10{

    public function cross_10_Prod_SegundoTurno_14_30_15(){

        $valor16 = ControladorCross_10::ctr_cross_10_Prod_SegundoTurno_14_30_15();

        echo json_encode($valor16);    

    }

}

$activar = new cross_producido_segundoturno_14_30_15_cross_10();
$activar -> cross_10_Prod_SegundoTurno_14_30_15();