<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_prod_1{

    public function status_prod_1_eje_60(){

        $valor41 = ControladorEje_60::ctr_status_prod_1_eje_60();

        echo json_encode($valor41);    

    }

}

$activar = new eje_60_status_prod_1();
$activar -> status_prod_1_eje_60();