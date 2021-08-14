<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_prod_0{

    public function status_prod_0_cross_50(){

        $valor42 = ControladorCross_50::ctr_status_prod_0_cross_50();

        echo json_encode($valor42);    

    }

}

$activar = new cross_50_status_prod_0();
$activar -> status_prod_0_cross_50();