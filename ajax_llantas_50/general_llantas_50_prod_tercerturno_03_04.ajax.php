<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_03_04{

    public function llantas_50_Prod_TercerTurno_03_04(){

        $valor30 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_03_04();

        echo json_encode($valor30);    

    }

}

$activar = new llantas_producido_tercerturno_03_04();
$activar -> llantas_50_Prod_TercerTurno_03_04();