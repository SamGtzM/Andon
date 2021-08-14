<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_prod_1{

    public function status_prod_1_eje_70(){

        $valor41 = ControladorEje_70::ctr_status_prod_1_eje_70();

        echo json_encode($valor41);    

    }

}

$activar = new eje_70_status_prod_1();
$activar -> status_prod_1_eje_70();