<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_cal_0{

    public function status_cal_0_eje_70(){

        $valor44 = ControladorEje_70::ctr_status_cal_0_eje_70();

        echo json_encode($valor44);    

    }

}

$activar = new eje_70_status_cal_0();
$activar -> status_cal_0_eje_70();