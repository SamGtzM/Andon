<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_log_0{

    public function status_log_0(){

        $valor46 = ControladorLlantas::ctr_status_log_0();

        echo json_encode($valor46);    

    }

}

$activar = new llantas_status_log_0();
$activar -> status_log_0();