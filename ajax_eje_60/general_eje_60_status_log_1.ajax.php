<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_log_1{

    public function status_log_1_eje_60(){

        $valor45 = ControladorEje_60::ctr_status_log_1_eje_60();

        echo json_encode($valor45);    

    }

}

$activar = new eje_60_status_log_1();
$activar -> status_log_1_eje_60();