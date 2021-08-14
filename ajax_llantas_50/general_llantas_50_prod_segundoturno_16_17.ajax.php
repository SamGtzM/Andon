<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_16_17{

    public function llantas_50_Prod_SegundoTurno_16_17(){

        $valor18 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_16_17();

        echo json_encode($valor18);    

    }

}

$activar = new llantas_producido_segundoturno_16_17();
$activar -> llantas_50_Prod_SegundoTurno_16_17();