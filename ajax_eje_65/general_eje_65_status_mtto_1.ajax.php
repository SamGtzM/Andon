<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_mtto_1{

    public function status_mtto_1_eje_65(){

        $valor39 = ControladorEje_65::ctr_status_mtto_1_eje_65();

        echo json_encode($valor39);    

    }

}

$activar = new eje_65_status_mtto_1();
$activar -> status_mtto_1_eje_65();