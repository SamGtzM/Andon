<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_cal_0{

    public function status_cal_0_cross_20(){

        $valor44 = ControladorCross_20::ctr_status_cal_0_cross_20();

        echo json_encode($valor44);    

    }

}

$activar = new cross_20_status_cal_0();
$activar -> status_cal_0_cross_20();