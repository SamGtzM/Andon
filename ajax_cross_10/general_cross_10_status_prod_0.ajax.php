<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_prod_0{

    public function status_prod_0_cross_10(){

        $valor42 = ControladorCross_10::ctr_status_prod_0_cross_10();

        echo json_encode($valor42);    

    }

}

$activar = new cross_10_status_prod_0();
$activar -> status_prod_0_cross_10();