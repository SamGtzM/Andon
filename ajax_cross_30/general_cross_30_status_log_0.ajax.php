<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_log_0{

    public function status_log_0_cross_30(){

        $valor46 = ControladorCross_30::ctr_status_log_0_cross_30();

        echo json_encode($valor46);    

    }

}

$activar = new cross_30_status_log_0();
$activar -> status_log_0_cross_30();