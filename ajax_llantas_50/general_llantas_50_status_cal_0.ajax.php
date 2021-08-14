<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_cal_0{

    public function status_cal_0(){

        $valor44 = ControladorLlantas::ctr_status_cal_0();

        echo json_encode($valor44);    

    }

}

$activar = new llantas_status_cal_0();
$activar -> status_cal_0();