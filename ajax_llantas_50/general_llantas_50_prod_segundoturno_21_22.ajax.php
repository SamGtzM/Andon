<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_21_22{

    public function llantas_50_Prod_SegundoTurno_21_22(){

        $valor23 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_21_22();

        echo json_encode($valor23);    

    }

}

$activar = new llantas_producido_segundoturno_21_22();
$activar -> llantas_50_Prod_SegundoTurno_21_22();