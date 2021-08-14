<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_rate{

    public function eje_60_rate(){

        $valor2 = ControladorEje_60::ctrmostrarrateEje_60();

        echo json_encode($valor2);    

    }

}

$activar = new eje_60_rate();
$activar -> eje_60_rate();