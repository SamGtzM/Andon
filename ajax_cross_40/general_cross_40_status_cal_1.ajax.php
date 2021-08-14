<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_cal_1{

    public function status_cal_1_cross_40(){

        $valor43 = ControladorCross_40::ctr_status_cal_1_cross_40();

        echo json_encode($valor43);    

    }

}

$activar = new cross_40_status_cal_1();
$activar -> status_cal_1_cross_40();