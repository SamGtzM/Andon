<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_log_1{

    public function status_log_1_cross_50(){

        $valor45 = ControladorCross_50::ctr_status_log_1_cross_50();

        echo json_encode($valor45);    

    }

}

$activar = new cross_50_status_log_1();
$activar -> status_log_1_cross_50();