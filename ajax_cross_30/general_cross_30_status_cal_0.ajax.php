<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_cal_0{

    public function status_cal_0_cross_30(){

        $valor44 = ControladorCross_30::ctr_status_cal_0_cross_30();

        echo json_encode($valor44);    

    }

}

$activar = new cross_30_status_cal_0();
$activar -> status_cal_0_cross_30();