<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_23_00{

    public function llantas_50_Prod_TercerTurno_23_00(){

        $valor26 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new llantas_producido_tercerturno_23_00();
$activar -> llantas_50_Prod_TercerTurno_23_00();