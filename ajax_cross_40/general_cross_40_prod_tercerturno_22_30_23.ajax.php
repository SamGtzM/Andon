<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_tercerturno_22_30_23_cross_40{

    public function cross_40_Prod_TercerTurno_22_30_23(){

        $valor25 = ControladorCross_40::ctr_cross_40_Prod_TercerTurno_22_30_23();

        echo json_encode($valor25);    

    }

}

$activar = new cross_producido_tercerturno_22_30_23_cross_40();
$activar -> cross_40_Prod_TercerTurno_22_30_23();