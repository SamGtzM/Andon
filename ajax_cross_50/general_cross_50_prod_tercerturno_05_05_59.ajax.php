<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_05_05_59_cross_50{

    public function cross_50_Prod_TercerTurno_05_05_59(){

        $valor32 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_05_05_59();

        echo json_encode($valor32);    

    }

}

$activar = new cross_producido_tercerturno_05_05_59_cross_50();
$activar -> cross_50_Prod_TercerTurno_05_05_59();