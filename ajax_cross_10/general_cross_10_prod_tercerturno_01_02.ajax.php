<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_tercerturno_01_02_cross_10{

    public function cross_10_Prod_TercerTurno_01_02(){

        $valor28 = ControladorCross_10::ctr_cross_10_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new cross_producido_tercerturno_01_02_cross_10();
$activar -> cross_10_Prod_TercerTurno_01_02();