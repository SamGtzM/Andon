<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_prod_0{

    public function status_prod_0(){

        $valor42 = ControladorLlantas::ctr_status_prod_0();

        echo json_encode($valor42);    

    }

}

$activar = new llantas_status_prod_0();
$activar -> status_prod_0();