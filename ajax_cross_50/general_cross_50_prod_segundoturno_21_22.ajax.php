<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_segundoturno_21_22_cross_50{

    public function cross_50_Prod_SegundoTurno_21_22(){

        $valor23 = ControladorCross_50::ctr_cross_50_Prod_SegundoTurno_21_22();

        echo json_encode($valor23);    

    }

}

$activar = new cross_producido_segundoturno_21_22_cross_50();
$activar -> cross_50_Prod_SegundoTurno_21_22();