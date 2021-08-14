<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_14_30_15{

    public function llantas_50_Prod_SegundoTurno_14_30_15(){

        $valor16 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_14_30_15();

        echo json_encode($valor16);    

    }

}

$activar = new llantas_producido_segundoturno_14_30_15();
$activar -> llantas_50_Prod_SegundoTurno_14_30_15();