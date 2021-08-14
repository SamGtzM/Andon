<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_mtto_0{

    public function status_mtto_0_eje_65(){

        $valor40 = ControladorEje_65::ctr_status_mtto_0_eje_65();

        echo json_encode($valor40);    

    }

}

$activar = new eje_65_status_mtto_0();
$activar -> status_mtto_0_eje_65();