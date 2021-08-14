<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_segundoturno_14_30_15_cross_40{

    public function cross_40_Prod_SegundoTurno_14_30_15(){

        $valor16 = ControladorCross_40::ctr_cross_40_Prod_SegundoTurno_14_30_15();

        echo json_encode($valor16);    

    }

}

$activar = new cross_producido_segundoturno_14_30_15_cross_40();
$activar -> cross_40_Prod_SegundoTurno_14_30_15();