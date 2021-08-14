<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_rate{

    public function eje_65_rate(){

        $valor2 = ControladorEje_65::ctrmostrarrateEje_65();

        echo json_encode($valor2);    

    }

}

$activar = new eje_65_rate();
$activar -> eje_65_rate();