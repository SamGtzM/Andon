<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_segundoturno_22_22_30_cross_10{

    public function cross_10_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorCross_10::ctr_cross_10_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_cross_10();
$activar -> cross_10_Prod_SegundoTurno_22_22_30();