<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_tercerturno_05_05_59_cross_10{

    public function cross_10_Prod_TercerTurno_05_05_59(){

        $valor32 = ControladorCross_10::ctr_cross_10_Prod_TercerTurno_05_05_59();

        echo json_encode($valor32);    

    }

}

$activar = new cross_producido_tercerturno_05_05_59_cross_10();
$activar -> cross_10_Prod_TercerTurno_05_05_59();