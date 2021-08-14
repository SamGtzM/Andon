<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_log_1{

    public function status_log_1_eje_65(){

        $valor45 = ControladorEje_65::ctr_status_log_1_eje_65();

        echo json_encode($valor45);    

    }

}

$activar = new eje_65_status_log_1();
$activar -> status_log_1_eje_65();