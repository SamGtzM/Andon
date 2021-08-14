<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_01_02_cross_50{

    public function cross_50_Prod_TercerTurno_01_02(){

        $valor28 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new cross_producido_tercerturno_01_02_cross_50();
$activar -> cross_50_Prod_TercerTurno_01_02();