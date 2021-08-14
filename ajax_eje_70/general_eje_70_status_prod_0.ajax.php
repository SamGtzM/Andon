<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_prod_0{

    public function status_prod_0_eje_70(){

        $valor42 = ControladorEje_70::ctr_status_prod_0_eje_70();

        echo json_encode($valor42);    

    }

}

$activar = new eje_70_status_prod_0();
$activar -> status_prod_0_eje_70();