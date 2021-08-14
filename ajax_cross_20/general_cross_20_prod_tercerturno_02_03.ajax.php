<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_tercerturno_02_03_cross_20{

    public function cross_20_Prod_TercerTurno_02_03(){

        $valor29 = ControladorCross_20::ctr_cross_20_Prod_TercerTurno_02_03();

        echo json_encode($valor29);    

    }

}

$activar = new cross_producido_tercerturno_02_03_cross_20();
$activar -> cross_20_Prod_TercerTurno_02_03();