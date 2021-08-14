<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_prod_1{

    public function status_prod_1_cross_10(){

        $valor41 = ControladorCross_10::ctr_status_prod_1_cross_10();

        echo json_encode($valor41);    

    }

}

$activar = new cross_10_status_prod_1();
$activar -> status_prod_1_cross_10();