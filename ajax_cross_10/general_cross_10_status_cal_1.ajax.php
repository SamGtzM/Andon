<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_cal_1{

    public function status_cal_1_cross_10(){

        $valor43 = ControladorCross_10::ctr_status_cal_1_cross_10();

        echo json_encode($valor43);    

    }

}

$activar = new cross_10_status_cal_1();
$activar -> status_cal_1_cross_10();