<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_mtto_0{

    public function status_mtto_0_cross_20(){

        $valor40 = ControladorCross_20::ctr_status_mtto_0_cross_20();

        echo json_encode($valor40);    

    }

}

$activar = new cross_20_status_mtto_0();
$activar -> status_mtto_0_cross_20();