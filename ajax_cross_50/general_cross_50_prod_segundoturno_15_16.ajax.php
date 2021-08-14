<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_segundoturno_15_16_cross_50{

    public function cross_50_Prod_SegundoTurno_15_16(){

        $valor17 = ControladorCross_50::ctr_cross_50_Prod_SegundoTurno_15_16();

        echo json_encode($valor17);    

    }

}

$activar = new cross_producido_segundoturno_15_16_cross_50();
$activar -> cross_50_Prod_SegundoTurno_15_16();