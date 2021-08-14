<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_log_0{

    public function status_log_0_eje_60(){

        $valor46 = ControladorEje_60::ctr_status_log_0_eje_60();

        echo json_encode($valor46);    

    }

}

$activar = new eje_60_status_log_0();
$activar -> status_log_0_eje_60();