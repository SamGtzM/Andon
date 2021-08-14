<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_mtto_0{

    public function status_mtto_0_eje_70(){

        $valor40 = ControladorEje_70::ctr_status_mtto_0_eje_70();

        echo json_encode($valor40);    

    }

}

$activar = new eje_70_status_mtto_0();
$activar -> status_mtto_0_eje_70();