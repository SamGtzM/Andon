<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_22_22_30_eje_60{

    public function eje_60_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_eje_60();
$activar -> eje_60_Prod_SegundoTurno_22_22_30();