<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_05_05_59{

    public function llantas_50_Prod_TercerTurno_05_05_59(){

        $valor32 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_05_05_59();

        echo json_encode($valor32);    

    }

}

$activar = new llantas_producido_tercerturno_05_05_59();
$activar -> llantas_50_Prod_TercerTurno_05_05_59();