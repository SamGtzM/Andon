<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_cal_1{

    public function status_cal_1(){

        $valor43 = ControladorLlantas::ctr_status_cal_1();

        echo json_encode($valor43);    

    }

}

$activar = new llantas_status_cal_1();
$activar -> status_cal_1();