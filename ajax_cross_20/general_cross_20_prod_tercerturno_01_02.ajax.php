<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_tercerturno_01_02_cross_20{

    public function cross_20_Prod_TercerTurno_01_02(){

        $valor28 = ControladorCross_20::ctr_cross_20_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new cross_producido_tercerturno_01_02_cross_20();
$activar -> cross_20_Prod_TercerTurno_01_02();