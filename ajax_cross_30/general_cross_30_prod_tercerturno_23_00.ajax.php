<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_tercerturno_23_00_cross_30{

    public function cross_30_Prod_TercerTurno_23_00(){

        $valor26 = ControladorCross_30::ctr_cross_30_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_cross_30();
$activar -> cross_30_Prod_TercerTurno_23_00();