<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_tercerturno_23_00_cross_10{

    public function cross_10_Prod_TercerTurno_23_00(){

        $valor26 = ControladorCross_10::ctr_cross_10_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_cross_10();
$activar -> cross_10_Prod_TercerTurno_23_00();