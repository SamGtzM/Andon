<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70{

    public function eje_70(){

        $valor = ControladorEje_70::ctr_eje_70();

        echo json_encode($valor);    

    }

}

$activar = new eje_70();
$activar -> eje_70();