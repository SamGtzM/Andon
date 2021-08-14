<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_02_03{

    public function llantas_50_Prod_TercerTurno_02_03(){

        $valor29 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_02_03();

        echo json_encode($valor29);    

    }

}

$activar = new llantas_producido_tercerturno_02_03();
$activar -> llantas_50_Prod_TercerTurno_02_03();