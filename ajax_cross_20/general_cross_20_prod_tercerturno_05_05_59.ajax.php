<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_tercerturno_05_05_59_cross_20{

    public function cross_20_Prod_TercerTurno_05_05_59(){

        $valor32 = ControladorCross_20::ctr_cross_20_Prod_TercerTurno_05_05_59();

        echo json_encode($valor32);    

    }

}

$activar = new cross_producido_tercerturno_05_05_59_cross_20();
$activar -> cross_20_Prod_TercerTurno_05_05_59();