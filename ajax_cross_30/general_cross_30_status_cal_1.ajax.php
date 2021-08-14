<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_cal_1{

    public function status_cal_1_cross_30(){

        $valor43 = ControladorCross_30::ctr_status_cal_1_cross_30();

        echo json_encode($valor43);    

    }

}

$activar = new cross_30_status_cal_1();
$activar -> status_cal_1_cross_30();