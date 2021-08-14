<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_cal_0{

    public function status_cal_0_cross_50(){

        $valor44 = ControladorCross_50::ctr_status_cal_0_cross_50();

        echo json_encode($valor44);    

    }

}

$activar = new cross_50_status_cal_0();
$activar -> status_cal_0_cross_50();