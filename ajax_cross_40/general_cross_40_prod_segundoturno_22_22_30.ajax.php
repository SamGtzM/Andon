<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_segundoturno_22_22_30_cross_40{

    public function cross_40_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorCross_40::ctr_cross_40_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_cross_40();
$activar -> cross_40_Prod_SegundoTurno_22_22_30();