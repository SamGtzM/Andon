<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_tercerturno_23_00_cross_20{

    public function cross_20_Prod_TercerTurno_23_00(){

        $valor26 = ControladorCross_20::ctr_cross_20_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_cross_20();
$activar -> cross_20_Prod_TercerTurno_23_00();