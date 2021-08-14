<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_01_02{

    public function llantas_50_Prod_TercerTurno_01_02(){

        $valor28 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new llantas_producido_tercerturno_01_02();
$activar -> llantas_50_Prod_TercerTurno_01_02();