<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60{

    public function eje_60(){

        $valor = ControladorEje_60::ctr_eje_60();

        echo json_encode($valor);    

    }

}

$activar = new eje_60();
$activar -> eje_60();