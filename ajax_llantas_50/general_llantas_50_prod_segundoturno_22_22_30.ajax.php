<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_22_22_30{

    public function llantas_50_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new llantas_producido_segundoturno_22_22_30();
$activar -> llantas_50_Prod_SegundoTurno_22_22_30();