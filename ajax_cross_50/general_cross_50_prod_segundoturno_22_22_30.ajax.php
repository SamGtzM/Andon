<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_segundoturno_22_22_30_cross_50{

    public function cross_50_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorCross_50::ctr_cross_50_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_cross_50();
$activar -> cross_50_Prod_SegundoTurno_22_22_30();