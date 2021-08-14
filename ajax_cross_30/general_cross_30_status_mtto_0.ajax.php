<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_mtto_0{

    public function status_mtto_0_cross_30(){

        $valor40 = ControladorCross_30::ctr_status_mtto_0_cross_30();

        echo json_encode($valor40);    

    }

}

$activar = new cross_30_status_mtto_0();
$activar -> status_mtto_0_cross_30();