<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_tercerturno_00_01_cross_40{

    public function cross_40_Prod_TercerTurno_00_01(){

        $valor27 = ControladorCross_40::ctr_cross_40_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_cross_40();
$activar -> cross_40_Prod_TercerTurno_00_01();