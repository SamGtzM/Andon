<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_17_18{

    public function llantas_50_Prod_SegundoTurno_17_18(){

        $valor19 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_17_18();

        echo json_encode($valor19);    

    }

}

$activar = new llantas_producido_segundoturno_17_18();
$activar -> llantas_50_Prod_SegundoTurno_17_18();