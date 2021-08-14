<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_log_0{

    public function status_log_0_eje_70(){

        $valor46 = ControladorEje_70::ctr_status_log_0_eje_70();

        echo json_encode($valor46);    

    }

}

$activar = new eje_70_status_log_0();
$activar -> status_log_0_eje_70();