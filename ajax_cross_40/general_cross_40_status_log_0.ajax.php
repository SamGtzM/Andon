<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_log_0{

    public function status_log_0_cross_40(){

        $valor46 = ControladorCross_40::ctr_status_log_0_cross_40();

        echo json_encode($valor46);    

    }

}

$activar = new cross_40_status_log_0();
$activar -> status_log_0_cross_40();