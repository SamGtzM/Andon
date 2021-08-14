<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_rate{

    public function eje_70_rate(){

        $valor2 = ControladorEje_70::ctrmostrarrateEje_70();

        echo json_encode($valor2);    

    }

}

$activar = new eje_70_rate();
$activar -> eje_70_rate();