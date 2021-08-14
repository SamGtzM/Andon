<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_cal_0{

    public function status_cal_0_cross_10(){

        $valor44 = ControladorCross_10::ctr_status_cal_0_cross_10();

        echo json_encode($valor44);    

    }

}

$activar = new cross_10_status_cal_0();
$activar -> status_cal_0_cross_10();