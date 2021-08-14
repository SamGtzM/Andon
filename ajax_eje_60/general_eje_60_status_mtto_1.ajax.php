<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_mtto_1{

    public function status_mtto_1_eje_60(){

        $valor39 = ControladorEje_60::ctr_status_mtto_1_eje_60();

        echo json_encode($valor39);    

    }

}

$activar = new eje_60_status_mtto_1();
$activar -> status_mtto_1_eje_60();