<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_prod_1{

    public function status_prod_1(){

        $valor41 = ControladorLlantas::ctr_status_prod_1();

        echo json_encode($valor41);    

    }

}

$activar = new llantas_status_prod_1();
$activar -> status_prod_1();