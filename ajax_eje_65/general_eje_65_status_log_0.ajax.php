<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_log_0{

    public function status_log_0_eje_65(){

        $valor46 = ControladorEje_65::ctr_status_log_0_eje_65();

        echo json_encode($valor46);    

    }

}

$activar = new eje_65_status_log_0();
$activar -> status_log_0_eje_65();