<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_tercerturno_02_03_cross_40{

    public function cross_40_Prod_TercerTurno_02_03(){

        $valor29 = ControladorCross_40::ctr_cross_40_Prod_TercerTurno_02_03();

        echo json_encode($valor29);    

    }

}

$activar = new cross_producido_tercerturno_02_03_cross_40();
$activar -> cross_40_Prod_TercerTurno_02_03();