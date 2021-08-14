<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_segundoturno_21_22_cross_30{

    public function cross_30_Prod_SegundoTurno_21_22(){

        $valor23 = ControladorCross_30::ctr_cross_30_Prod_SegundoTurno_21_22();

        echo json_encode($valor23);    

    }

}

$activar = new cross_producido_segundoturno_21_22_cross_30();
$activar -> cross_30_Prod_SegundoTurno_21_22();