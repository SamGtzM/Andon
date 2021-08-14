<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_21_22_eje_60{

    public function eje_60_Prod_SegundoTurno_21_22(){

        $valor23 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_21_22();

        echo json_encode($valor23);    

    }

}

$activar = new cross_producido_segundoturno_21_22_eje_60();
$activar -> eje_60_Prod_SegundoTurno_21_22();