<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_mtto_0{

    public function status_mtto_0_cross_40(){

        $valor40 = ControladorCross_40::ctr_status_mtto_0_cross_40();

        echo json_encode($valor40);    

    }

}

$activar = new cross_40_status_mtto_0();
$activar -> status_mtto_0_cross_40();