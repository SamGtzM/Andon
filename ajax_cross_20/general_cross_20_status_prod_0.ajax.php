<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_prod_0{

    public function status_prod_0_cross_20(){

        $valor42 = ControladorCross_20::ctr_status_prod_0_cross_20();

        echo json_encode($valor42);    

    }

}

$activar = new cross_20_status_prod_0();
$activar -> status_prod_0_cross_20();