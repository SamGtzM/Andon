<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_mtto_0{

    public function status_mtto_0_cross_10(){

        $valor40 = ControladorCross_10::ctr_status_mtto_0_cross_10();

        echo json_encode($valor40);    

    }

}

$activar = new cross_10_status_mtto_0();
$activar -> status_mtto_0_cross_10();