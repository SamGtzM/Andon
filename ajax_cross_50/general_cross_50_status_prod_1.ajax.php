<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_prod_1{

    public function status_prod_1_cross_50(){

        $valor41 = ControladorCross_50::ctr_status_prod_1_cross_50();

        echo json_encode($valor41);    

    }

}

$activar = new cross_50_status_prod_1();
$activar -> status_prod_1_cross_50();