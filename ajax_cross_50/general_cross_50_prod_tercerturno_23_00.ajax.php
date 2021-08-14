<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_23_00_cross_50{

    public function cross_50_Prod_TercerTurno_23_00(){

        $valor26 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_cross_50();
$activar -> cross_50_Prod_TercerTurno_23_00();