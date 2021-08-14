<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_log_1{

    public function status_log_1_cross_20(){

        $valor45 = ControladorCross_20::ctr_status_log_1_cross_20();

        echo json_encode($valor45);    

    }

}

$activar = new cross_20_status_log_1();
$activar -> status_log_1_cross_20();