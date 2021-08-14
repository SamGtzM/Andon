<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_mtto_0{

    public function status_mtto_0_eje_60(){

        $valor40 = ControladorEje_60::ctr_status_mtto_0_eje_60();

        echo json_encode($valor40);    

    }

}

$activar = new eje_60_status_mtto_0();
$activar -> status_mtto_0_eje_60();