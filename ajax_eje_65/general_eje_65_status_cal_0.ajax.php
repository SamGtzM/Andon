<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_cal_0{

    public function status_cal_0_eje_65(){

        $valor44 = ControladorEje_65::ctr_status_cal_0_eje_65();

        echo json_encode($valor44);    

    }

}

$activar = new eje_65_status_cal_0();
$activar -> status_cal_0_eje_65();