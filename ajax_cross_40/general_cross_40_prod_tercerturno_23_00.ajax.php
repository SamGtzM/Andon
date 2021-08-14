<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_tercerturno_23_00_cross_40{

    public function cross_40_Prod_TercerTurno_23_00(){

        $valor26 = ControladorCross_40::ctr_cross_40_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_cross_40();
$activar -> cross_40_Prod_TercerTurno_23_00();