<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_prod_0{

    public function status_prod_0_eje_60(){

        $valor42 = ControladorEje_60::ctr_status_prod_0_eje_60();

        echo json_encode($valor42);    

    }

}

$activar = new eje_60_status_prod_0();
$activar -> status_prod_0_eje_60();