<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_segundoturno_22_22_30_eje_65{

    public function eje_65_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorEje_65::ctr_eje_65_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_eje_65();
$activar -> eje_65_Prod_SegundoTurno_22_22_30();