<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_tercerturno_02_03_cross_10{

    public function cross_10_Prod_TercerTurno_02_03(){

        $valor29 = ControladorCross_10::ctr_cross_10_Prod_TercerTurno_02_03();

        echo json_encode($valor29);    

    }

}

$activar = new cross_producido_tercerturno_02_03_cross_10();
$activar -> cross_10_Prod_TercerTurno_02_03();