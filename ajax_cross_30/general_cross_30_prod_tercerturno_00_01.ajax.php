<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_tercerturno_00_01_cross_30{

    public function cross_30_Prod_TercerTurno_00_01(){

        $valor27 = ControladorCross_30::ctr_cross_30_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_cross_30();
$activar -> cross_30_Prod_TercerTurno_00_01();