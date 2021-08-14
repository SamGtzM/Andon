<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_16_17_eje_60{

    public function eje_60_Prod_SegundoTurno_16_17(){

        $valor18 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_16_17();

        echo json_encode($valor18);    

    }

}

$activar = new cross_producido_segundoturno_16_17_eje_60();
$activar -> eje_60_Prod_SegundoTurno_16_17();