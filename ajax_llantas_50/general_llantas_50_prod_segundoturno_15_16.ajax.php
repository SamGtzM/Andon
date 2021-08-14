<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_15_16{

    public function llantas_50_Prod_SegundoTurno_15_16(){

        $valor17 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_15_16();

        echo json_encode($valor17);    

    }

}

$activar = new llantas_producido_segundoturno_15_16();
$activar -> llantas_50_Prod_SegundoTurno_15_16();