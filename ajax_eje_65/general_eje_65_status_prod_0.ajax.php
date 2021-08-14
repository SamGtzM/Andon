<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_prod_0{

    public function status_prod_0_eje_65(){

        $valor42 = ControladorEje_65::ctr_status_prod_0_eje_65();

        echo json_encode($valor42);    

    }

}

$activar = new eje_65_status_prod_0();
$activar -> status_prod_0_eje_65();