<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_cal_0{

    public function status_cal_0_eje_60(){

        $valor44 = ControladorEje_60::ctr_status_cal_0_eje_60();

        echo json_encode($valor44);    

    }

}

$activar = new eje_60_status_cal_0();
$activar -> status_cal_0_eje_60();