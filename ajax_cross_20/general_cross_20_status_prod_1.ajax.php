<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_prod_1{

    public function status_prod_1_cross_20(){

        $valor41 = ControladorCross_20::ctr_status_prod_1_cross_20();

        echo json_encode($valor41);    

    }

}

$activar = new cross_20_status_prod_1();
$activar -> status_prod_1_cross_20();