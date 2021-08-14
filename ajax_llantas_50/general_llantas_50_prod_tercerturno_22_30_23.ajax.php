<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_22_30_23{

    public function llantas_50_Prod_TercerTurno_22_30_23(){

        $valor25 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_22_30_23();

        echo json_encode($valor25);    

    }

}

$activar = new llantas_producido_tercerturno_22_30_23();
$activar -> llantas_50_Prod_TercerTurno_22_30_23();