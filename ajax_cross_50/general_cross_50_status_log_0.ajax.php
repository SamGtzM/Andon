<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_log_0{

    public function status_log_0_cross_50(){

        $valor46 = ControladorCross_50::ctr_status_log_0_cross_50();

        echo json_encode($valor46);    

    }

}

$activar = new cross_50_status_log_0();
$activar -> status_log_0_cross_50();