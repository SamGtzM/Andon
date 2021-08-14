<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_tercerturno_00_01_cross_10{

    public function cross_10_Prod_TercerTurno_00_01(){

        $valor27 = ControladorCross_10::ctr_cross_10_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_cross_10();
$activar -> cross_10_Prod_TercerTurno_00_01();