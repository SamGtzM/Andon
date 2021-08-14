<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_04_05{

    public function llantas_50_Prod_TercerTurno_04_05(){

        $valor31 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_04_05();

        echo json_encode($valor31);    

    }

}

$activar = new llantas_producido_tercerturno_04_05();
$activar -> llantas_50_Prod_TercerTurno_04_05();