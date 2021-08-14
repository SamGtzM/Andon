<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_log_1{

    public function status_log_1(){

        $valor45 = ControladorLlantas::ctr_status_log_1();

        echo json_encode($valor45);    

    }

}

$activar = new llantas_status_log_1();
$activar -> status_log_1();