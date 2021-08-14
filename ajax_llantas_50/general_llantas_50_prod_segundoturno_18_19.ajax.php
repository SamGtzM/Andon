<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_18_19{

    public function llantas_50_Prod_SegundoTurno_18_19(){

        $valor20 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_18_19();

        echo json_encode($valor20);    

    }

}

$activar = new llantas_producido_segundoturno_18_19();
$activar -> llantas_50_Prod_SegundoTurno_18_19();