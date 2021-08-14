<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_prod_1{

    public function status_prod_1_cross_30(){

        $valor41 = ControladorCross_30::ctr_status_prod_1_cross_30();

        echo json_encode($valor41);    

    }

}

$activar = new cross_30_status_prod_1();
$activar -> status_prod_1_cross_30();