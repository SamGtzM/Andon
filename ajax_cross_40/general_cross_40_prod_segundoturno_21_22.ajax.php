<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_segundoturno_21_22_cross_40{

    public function cross_40_Prod_SegundoTurno_21_22(){

        $valor23 = ControladorCross_40::ctr_cross_40_Prod_SegundoTurno_21_22();

        echo json_encode($valor23);    

    }

}

$activar = new cross_producido_segundoturno_21_22_cross_40();
$activar -> cross_40_Prod_SegundoTurno_21_22();