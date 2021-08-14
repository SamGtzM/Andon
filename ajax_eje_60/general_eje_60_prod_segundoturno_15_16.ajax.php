<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_15_16_eje_60{

    public function eje_60_Prod_SegundoTurno_15_16(){

        $valor17 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_15_16();

        echo json_encode($valor17);    

    }

}

$activar = new cross_producido_segundoturno_15_16_eje_60();
$activar -> eje_60_Prod_SegundoTurno_15_16();