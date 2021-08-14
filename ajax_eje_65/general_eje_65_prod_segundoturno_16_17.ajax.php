<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_segundoturno_16_17_eje_65{

    public function eje_65_Prod_SegundoTurno_16_17(){

        $valor18 = ControladorEje_65::ctr_eje_65_Prod_SegundoTurno_16_17();

        echo json_encode($valor18);    

    }

}

$activar = new cross_producido_segundoturno_16_17_eje_65();
$activar -> eje_65_Prod_SegundoTurno_16_17();