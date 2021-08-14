<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_tercerturno_04_05_cross_50{

    public function cross_50_Prod_TercerTurno_04_05(){

        $valor31 = ControladorCross_50::ctr_cross_50_Prod_TercerTurno_04_05();

        echo json_encode($valor31);    

    }

}

$activar = new cross_producido_tercerturno_04_05_cross_50();
$activar -> cross_50_Prod_TercerTurno_04_05();