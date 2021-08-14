<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_mtto_0{

    public function status_mtto_0_cross_50(){

        $valor40 = ControladorCross_50::ctr_status_mtto_0_cross_50();

        echo json_encode($valor40);    

    }

}

$activar = new cross_50_status_mtto_0();
$activar -> status_mtto_0_cross_50();