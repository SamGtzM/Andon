<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_02_03_cross_50{

    public function cross_50_Prod_TercerTurno_02_03(){

        $valor29 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_02_03();

        echo json_encode($valor29);    

    }

}

$activar = new cross_producido_tercerturno_02_03_cross_50();
$activar -> cross_50_Prod_TercerTurno_02_03();