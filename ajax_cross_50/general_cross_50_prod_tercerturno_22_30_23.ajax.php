<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_22_30_23_cross_50{

    public function cross_50_Prod_TercerTurno_22_30_23(){

        $valor25 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_22_30_23();

        echo json_encode($valor25);    

    }

}

$activar = new cross_producido_tercerturno_22_30_23_cross_50();
$activar -> cross_50_Prod_TercerTurno_22_30_23();