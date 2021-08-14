<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_tercerturno_00_01{

    public function llantas_50_Prod_TercerTurno_00_01(){

        $valor27 = ControladorLlantas::ctr_llantas_50_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new llantas_producido_tercerturno_00_01();
$activar -> llantas_50_Prod_TercerTurno_00_01();