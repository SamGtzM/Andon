<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_00_01_cross_50{

    public function cross_50_Prod_TercerTurno_00_01(){

        $valor27 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_cross_50();
$activar -> cross_50_Prod_TercerTurno_00_01();