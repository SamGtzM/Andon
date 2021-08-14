<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_tercerturno_05_05_59_cross_30{

    public function cross_30_Prod_TercerTurno_05_05_59(){

        $valor32 = ControladorCross_30::ctr_cross_30_Prod_TercerTurno_05_05_59();

        echo json_encode($valor32);    

    }

}

$activar = new cross_producido_tercerturno_05_05_59_cross_30();
$activar -> cross_30_Prod_TercerTurno_05_05_59();