<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_segundoturno_15_16_cross_30{

    public function cross_30_Prod_SegundoTurno_15_16(){

        $valor17 = ControladorCross_30::ctr_cross_30_Prod_SegundoTurno_15_16();

        echo json_encode($valor17);    

    }

}

$activar = new cross_producido_segundoturno_15_16_cross_30();
$activar -> cross_30_Prod_SegundoTurno_15_16();